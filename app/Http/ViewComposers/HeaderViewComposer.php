<?php

namespace App\Http\ViewComposers;


use App\Models\Category;
use Illuminate\View\View;


class HeaderViewComposer
{
	public function compose(View $view): void
	{
		$languageCategories = Category::language()->get();
		$toolCategories = Category::tool()->get();
		
		$languageItems = $languageCategories->map(function ($category) {
			return [
					'name' => $category->name,
					'url' => route('categories.show', $category->id),
			];
		});
		
		$toolItems = $toolCategories->map(function ($category) {
			return [
					'name' => $category->name,
					'url' => route('categories.show', $category->id),
			];
		});
	
		$view->with([
				'languageItems' => $languageItems,
				'toolItems' => $toolItems,
		]);
	}
}

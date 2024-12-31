<?php

namespace App\Http\ViewComposers;


use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class CartViewComposer
{
	public function compose(View $view): void
	{
		$cart = Auth::user()->cart;
		$view->with('cart', $cart);
	}
}

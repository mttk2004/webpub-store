<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
	use HasFactory;
	
	
	public $timestamps = false;
	protected $fillable
			= [
					'parent_id',
					'name',
					'description',
			];
	
	public function parent(): BelongsTo
	{
		return $this->belongsTo(Category::class, 'parent_id');
	}
	
	public function children(): HasMany
	{
		return $this->hasMany(Category::class, 'parent_id');
	}
	
	public function scopeLanguages($query)
	{
		// where parent's name is 'Ngôn ngữ'
		return $query->whereHas('parent', function ($query) {
			$query->where('name', 'Ngôn ngữ');
		});
	}
	
	public function scopeTechnologies($query)
	{
		// where parent's name is 'Công nghệ'
		return $query->whereHas('parent', function ($query) {
			$query->where('name', 'Công nghệ');
		});
	}
}

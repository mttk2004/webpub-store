<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Book extends Model
{
	use HasUuids, HasFactory, SoftDeletes;
	
	
	protected $fillable
			= [
					'category_id',
					'publisher_id',
					'discount_id',
					'title',
					'description',
					'price',
					'quantity',
					'cover',
					'pages',
					'isbn',
					'edition',
					'publication_date',
			];
	
	protected function hasDiscount(): Attribute
	{
		return Attribute::get(fn() => $this->discount_id !== null);
	}
	
	protected function priceWithDiscount(): Attribute
	{
		return Attribute::get(fn() => $this->hasDiscount() ?
				$this->discount->apply($this->price) : $this->price);
	}
	
	protected function authorNames(): Attribute
	{
		return Attribute::get(fn() => $this->authors->pluck('name')->toArray());
	}
	
	protected function publisherName(): Attribute
	{
		return Attribute::get(fn() => $this->publisher->name);
	}
	
	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}
	
	public function publisher(): BelongsTo
	{
		return $this->belongsTo(Publisher::class);
	}
	
	public function discount(): BelongsTo
	{
		return $this->belongsTo(Discount::class);
	}
	
	public function authors(): BelongsToMany
	{
		return $this->belongsToMany(Author::class);
	}
	
	protected function casts(): array
	{
		return [
				'publication_date' => 'date',
				'created_at' => 'datetime',
				'updated_at' => 'datetime',
				'deleted_at' => 'datetime',
		];
	}
}

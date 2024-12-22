<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

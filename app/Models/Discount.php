<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;


class Discount extends Model
{
	use SoftDeletes;
	
	
	public $incrementing = false;  // Vô hiệu hóa tự động tăng ID
	protected $keyType = 'string'; // Kiểu khóa chính là string
	
	protected static function boot(): void
	{
		parent::boot();
		
		static::creating(function ($model) {
			$model->{$model->getKeyName()} = App::make('snowflake')->id();
		});
	}
	
	protected $fillable
			= [
					'name',
					'description',
					'type',
					'scope',
					'value',
					'start_date',
					'end_date',
					'book_id',
					'author_id',
					'category_id',
					'publisher_id',
					'min_purchase_amount',
					'max_discount_amount',
			];
	
	public function book(): BelongsTo
	{
		return $this->belongsTo(Book::class);
	}
	
	public function author(): BelongsTo
	{
		return $this->belongsTo(Author::class);
	}
	
	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}
	
	public function publisher(): BelongsTo
	{
		return $this->belongsTo(Publisher::class);
	}
}

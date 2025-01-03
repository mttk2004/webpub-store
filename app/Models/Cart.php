<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\App;


class Cart extends Model
{
	use HasFactory;
	
	
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
					'user_id',
					'total_amount',
					'discount_amount',
			];
	
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Cart extends Model
{
	use HasUuids, HasFactory;
	
	
	public $timestamps = false;
	protected $fillable
			= [
					'user_id',
					'total_amount',
					'updated_at',
			];
	
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
	
	protected function casts(): array
	{
		return [
				'updated_at' => 'datetime',
		];
	}
	
	public function cartItems(): HasMany
	{
		return $this->hasMany(CartItem::class);
	}
}

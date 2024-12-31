<?php

namespace App\Models;


use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @property Cart     cart
 * @property CartItem cartItems
 */
class User extends Authenticatable implements AuthenticatableContract
{
	use HasUuids, HasFactory, SoftDeletes;
	
	
	protected $fillable
			= [
					'role',
					'first_name',
					'last_name',
					'email',
					'password',
					'avatar',
					'email_verified_at',
					'remember_token',
			];
	protected $hidden
			= [
					'password',
					'remember_token',
			];
	
	public function casts(): array
	{
		return [
				'email_verified_at' => 'datetime',
				'created_at' => 'datetime',
				'updated_at' => 'datetime',
				'deleted_at' => 'datetime',
		];
	}
	
	public function addresses(): HasMany
	{
		return $this->hasMany(Address::class);
	}
	
	public function cart(): HasOne
	{
		return $this->hasOne(Cart::class);
	}
	
	public function cartItems(): HasManyThrough
	{
		return $this->hasManyThrough(CartItem::class, Cart::class);
	}
}

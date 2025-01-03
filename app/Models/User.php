<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;


class User extends Model
{
	use HasFactory, SoftDeletes;
	
	
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
	
	public function addresses(): HasMany
	{
		return $this->hasMany(Address::class);
	}
}

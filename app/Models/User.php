<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Model
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
}

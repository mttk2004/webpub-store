<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class Address extends Model
{
	use HasFactory, SoftDeletes;
	
	
	protected $fillable
			= [
					'user_id',
					'address_line_1',
					'address_line_2',
					'city',
					'phone',
					'is_primary',
			];
	
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
	
	protected function casts(): array
	{
		return [
				'is_primary' => 'boolean',
		];
	}
}

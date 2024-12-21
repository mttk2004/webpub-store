<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Address extends Model
{
	use HasUuids, HasFactory;
	
	
	public $timestamps = false;
	protected $fillable
			= [
					'user_id',
					'address_line_1',
					'address_line_2',
					'city',
					'is_primary',
					'created_at',
					'updated_at',
					'deleted_at',
			];
	
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
	
	protected function casts(): array
	{
		return [
				'is_primary' => 'boolean',
				'created_at' => 'datetime',
				'updated_at' => 'datetime',
				'deleted_at' => 'datetime',
		];
	}
}

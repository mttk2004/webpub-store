<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Discount extends Model
{
	use HasUuids, HasFactory, SoftDeletes;
	
	
	protected $fillable
			= [
					'name',
					'description',
					'type',
					'value',
					'start_date',
					'end_date',
					'min_purchase_amount',
					'max_discount_amount',
			];
	
	public function casts(): array
	{
		return [
				'type' => 'string',
				'created_at' => 'datetime',
				'updated_at' => 'datetime',
				'deleted_at' => 'datetime',
		];
	}
}

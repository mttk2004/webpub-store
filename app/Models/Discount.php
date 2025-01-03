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
	
	public function apply(float $price): float
	{
		// Apply discount logic here
		return $this->type === 'percentage' ?
				$price - ($price * $this->value / 100) : $price - $this->value;
	}
	
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

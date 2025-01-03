<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class BookStatistic extends Model
{
	use HasFactory;
	
	
	public $timestamps = false;
	protected $fillable
			= [
					'book_id',
					'average_rating',
					'total_sold',
					'total_view',
					'total_revenue',
					'last_ordered_at',
			];
	
	public function book(): BelongsTo
	{
		return $this->belongsTo(Book::class);
	}
}

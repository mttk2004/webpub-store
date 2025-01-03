<?php

function format_price(float $price): string
{
	return number_format($price, 2, ',', '.') . 'đ';
}

function format_publication_date(string $date): string
{
	// return string format: Tháng XX, YYYY
	$months = [
			'01' => 'Tháng 1',
			'02' => 'Tháng 2',
			'03' => 'Tháng 3',
			'04' => 'Tháng 4',
			'05' => 'Tháng 5',
			'06' => 'Tháng 6',
			'07' => 'Tháng 7',
			'08' => 'Tháng 8',
			'09' => 'Tháng 9',
			'10' => 'Tháng 10',
			'11' => 'Tháng 11',
			'12' => 'Tháng 12',
	];
	[$year, $month] = explode('-', $date);
	
	return $months[$month] . ', ' . $year;
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('book_statistics', function (Blueprint $table) {
			$table->foreignId('book_id')->constrained('books');
			$table->decimal('average_rating');
			$table->unsignedBigInteger('total_sold');
			$table->unsignedBigInteger('total_view');
			$table->decimal('total_revenue');
			$table->timestamp('last_ordered_at')->nullable();
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('book_statistics');
	}
};

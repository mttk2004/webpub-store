<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('book_statistics', function (Blueprint $table) {
			$table->foreignId('book_id')
				  ->constrained('books')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
			$table->decimal('average_rating', 3, 1)->default(0.0);
			$table->unsignedBigInteger('total_sold')->default(0);
			$table->unsignedBigInteger('total_view')->default(0);
			$table->decimal('total_revenue', 18, 2)->default(0.00);
			$table->timestamp('last_ordered_at')->nullable();
			
			$table->primary('book_id');
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('book_statistics');
	}
};

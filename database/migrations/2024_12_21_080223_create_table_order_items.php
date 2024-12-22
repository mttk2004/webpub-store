<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('order_items', function (Blueprint $table) {
			$table->id()->startingValue(10000);
			$table->uuid('order_id');
			$table->uuid('book_id');
			$table->unsignedInteger('quantity');
			
			$table->foreign('order_id')
				  ->references('id')
				  ->on('orders')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
			$table->foreign('book_id')
				  ->references('id')
				  ->on('books')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('order_items');
	}
};

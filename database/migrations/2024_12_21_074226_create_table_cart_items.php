<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('cart_items', function (Blueprint $table) {
			$table->id();
			$table->uuid('cart_id');
			$table->uuid('book_id');
			$table->unsignedInteger('quantity')->default(1);
			
			$table->foreign('cart_id')
				  ->references('id')
				  ->on('carts')
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
		Schema::dropIfExists('cart_items');
	}
};

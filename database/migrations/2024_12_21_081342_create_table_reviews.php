<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('reviews', function (Blueprint $table) {
			$table->id();
			$table->uuid('user_id');
			$table->uuid('book_id');
			$table->foreignId('order_item_id')
				  ->constrained()
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
			$table->unsignedSmallInteger('rating');
			$table->text('comment', 500)->nullable();
			$table->dateTime('created_at')->useCurrent();
			$table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
			$table->dateTime('deleted_at')->nullable();
			
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
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
		Schema::dropIfExists('reviews');
	}
};

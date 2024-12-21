<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('favorites', function (Blueprint $table) {
			$table->uuid('user_id');
			$table->uuid('book_id');
			
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
			$table->primary(['user_id', 'book_id']);
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('favorites');
	}
};

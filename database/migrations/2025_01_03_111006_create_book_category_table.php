<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('book_category', function (Blueprint $table) {
			$table->bigInteger('book_id')->unsigned();
			$table->foreign('book_id')
				  ->references('id')
				  ->on('books')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
			$table->foreignId('category_id')
				  ->constrained()
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
			$table->primary(['book_id', 'category_id']);
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('book_category');
	}
};

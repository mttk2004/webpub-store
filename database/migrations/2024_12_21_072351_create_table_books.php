<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('books', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->foreignId('category_id');
			$table->foreignId('publisher_id');
			$table->uuid('discount_id')->nullable();
			$table->string('title', 255);
			$table->text('description');
			$table->decimal('price', 15, 2);
			$table->unsignedInteger('quantity');
			$table->string('cover', 255);
			$table->unsignedInteger('pages');
			$table->string('isbn', 50)->unique();
			$table->unsignedSmallInteger('edition');
			$table->date('publication_date');
			$table->dateTime('created_at')->useCurrent();
			$table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
			$table->dateTime('deleted_at')->nullable();
			
			$table->foreign('discount_id')
				  ->references('id')
				  ->on('discounts')
				  ->onDelete('set null')
				  ->onUpdate('cascade');
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('books');
	}
};

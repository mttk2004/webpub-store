<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('discounts', function (Blueprint $table) {
			$table->bigInteger('id')->unsigned()->primary(); // Snowflake ID (64 bit)
			$table->string('name')->index();
			$table->text('description');
			$table->enum('type', ['percentage', 'fixed'])->default('percentage');
			$table->enum('scope', ['product', 'order', 'category', 'author', 'publisher'])
				  ->default('order');
			$table->decimal('value', 15, 2);
			$table->timestamp('start_date');
			$table->timestamp('end_date');
			$table->foreignId('book_id')->nullable();
			$table->foreignId('author_id')->nullable();
			$table->foreignId('category_id')->nullable();
			$table->foreignId('publisher_id')->nullable();
			$table->decimal('min_purchase_amount', 15, 2)
				  ->nullable()->default(0.00);
			$table->decimal('max_discount_amount', 15, 2)
				  ->nullable()->default(0.00);
			$table->timestamp('created_at')->useCurrent();
			$table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
			$table->softDeletes();
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('discounts');
	}
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('discounts', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->string('name', 50)->unique();
			$table->text('description');
			$table->enum('type', ['percentage', 'fixed']);
			$table->decimal('value', 15, 2);
			$table->dateTime('start_date');
			$table->dateTime('end_date');
			$table->decimal('min_purchase_amount', 15, 2)->nullable();
			$table->decimal('max_discount_amount', 15, 2)->nullable();
			$table->dateTime('created_at')->useCurrent();
			$table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
			$table->dateTime('deleted_at')->nullable();
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('discounts');
	}
};

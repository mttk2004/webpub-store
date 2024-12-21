<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('payments', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->uuid('order_id');
			$table->enum('method', ['credit_card', 'bank_transfer', 'cash_on_delivery'])
				  ->default('cash_on_delivery');
			$table->enum('status', ['pending', 'success', 'failed'])->default('pending');
			$table->text('description')->nullable();
			$table->dateTime('created_at')->useCurrent();
			$table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
			
			$table->foreign('order_id')
				  ->references('id')
				  ->on('orders')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('payments');
	}
};

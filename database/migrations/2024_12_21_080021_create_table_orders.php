<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('orders', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->uuid('user_id');
			$table->decimal('total_amount', 15, 2);
			$table->dateTime('created_at')->useCurrent();
			$table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('orders');
	}
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('carts', function (Blueprint $table) {
			$table->bigInteger('id')->unsigned()->primary(); // Snowflake ID (64 bit)
			$table->foreignId('user_id')->constrained('users');
			$table->decimal('total_amount', 15, 2)->default(0.00);
			$table->decimal('discount_amount', 15, 2)->default(0.00);
			$table->timestamp('created_at')->useCurrent();
			$table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('carts');
	}
};

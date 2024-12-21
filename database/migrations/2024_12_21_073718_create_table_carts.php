<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('carts', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->uuid('user_id');
			$table->decimal('total_amount', 15, 2)->default(0);
			$table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
			
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('carts');
	}
};

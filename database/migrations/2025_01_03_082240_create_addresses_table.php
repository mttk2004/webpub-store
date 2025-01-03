<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('addresses', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')->constrained('users');
			$table->string('address_line_1');
			$table->string('address_line_2')->nullable();
			$table->string('city');
			$table->string('phone', 10);
			$table->boolean('is_primary')->default(false);
			$table->timestamp('created_at')->useCurrent();
			$table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
			$table->softDeletes();
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('addresses');
	}
};

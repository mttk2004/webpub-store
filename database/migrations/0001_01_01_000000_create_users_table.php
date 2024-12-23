<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('users', function (Blueprint $table) {
			$table->uuid('id')->primary();
			$table->enum('role', ['customer', 'admin'])
				  ->default('customer');
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('email', 50)->unique();
			$table->string('password');
			$table->string('avatar')
				  ->default('https://ui-avatars.com/api/?name=Web+Pub');
			$table->dateTime('email_verified_at')->nullable();
			$table->rememberToken();
			$table->dateTime('created_at')->useCurrent();
			$table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
			$table->dateTime('deleted_at')->nullable();
		});
		
		Schema::create('password_reset_tokens', function (Blueprint $table) {
			$table->string('email')->primary();
			$table->string('token');
			$table->timestamp('created_at')->nullable();
		});
		
		Schema::create('sessions', function (Blueprint $table) {
			$table->string('id')->primary();
			$table->foreignId('user_id')->nullable()->index();
			$table->string('ip_address', 45)->nullable();
			$table->text('user_agent')->nullable();
			$table->longText('payload');
			$table->integer('last_activity')->index();
		});
	}
	
	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('users');
		Schema::dropIfExists('password_reset_tokens');
		Schema::dropIfExists('sessions');
	}
};

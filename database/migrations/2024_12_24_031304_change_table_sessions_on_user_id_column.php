<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::table('sessions', function (Blueprint $table) {
			$table->uuid('user_id')->nullable()->change();
			
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('set null');
		});
	}
	
	public function down(): void
	{
		Schema::table('sessions', function (Blueprint $table) {
			//
		});
	}
};

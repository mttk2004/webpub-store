<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('authors', function (Blueprint $table) {
			$table->id()->startingValue(10000);
			$table->string('name', 50)->unique();
			$table->text('description');
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('authors');
	}
};
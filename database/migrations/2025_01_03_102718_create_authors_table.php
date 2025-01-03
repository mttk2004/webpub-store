<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('authors', function (Blueprint $table) {
			$table->id()->startingValue('100000');
			$table->string('name')->index();
			$table->text('description');
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('authors');
	}
};

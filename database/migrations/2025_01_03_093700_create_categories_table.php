<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('categories', function (Blueprint $table) {
			$table->id()->startingValue(100000);
			$table->unsignedBigInteger('parent_id')->nullable();
			$table->string('name')->unique()->index();
			$table->text('description');
			
			$table->foreign('parent_id')
				  ->references('id')->on('categories')
				  ->onDelete('cascade')->onUpdate('cascade');
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('categories');
	}
};

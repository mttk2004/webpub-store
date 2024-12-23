<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('categories', function (Blueprint $table) {
			$table->id()->startingValue(10000);
			$table->unsignedBigInteger('parent_id')->nullable();
			$table->foreign('parent_id')
				  ->references('id')
				  ->on('categories')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
			$table->string('name', 50)->unique();
			$table->text('description');
			$table->dateTime('created_at')->useCurrent();
			$table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
			$table->dateTime('deleted_at')->nullable();
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('categories');
	}
};

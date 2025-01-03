<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
	public function up(): void
	{
		Schema::create('books', function (Blueprint $table) {
			$table->bigInteger('id')->unsigned()->primary(); // Snowflake ID (64 bit)
			$table->foreignId('publisher_id')->constrained('publishers')
				  ->onDelete('cascade')->onUpdate('cascade');
			$table->string('title')->unique()->index();
			$table->text('description');
			$table->decimal('price', 15, 2);
			$table->unsignedInteger('quantity');
			$table->string('cover');
			$table->unsignedSmallInteger('pages');
			$table->string('isbn', 13)->unique()->index();
			$table->unsignedSmallInteger('edition');
			$table->date('publication_date');
			$table->timestamp('created_at')->useCurrent();
			$table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
			$table->softDeletes();
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('books');
	}
};

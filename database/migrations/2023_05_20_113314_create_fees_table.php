<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fees_type_id')->nullable()->constrained('fees_types');
            $table->integer('year_of_payment')->nullable();
            $table->float('amount')->nullable();
            $table->date('date_of_payment')->nullable();
            $table->foreignId('member_id')->nullable()->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fees');
    }
};

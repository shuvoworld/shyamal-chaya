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

        Schema::create('plot_allocations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('road_id')->nullable()->constrained();
            $table->integer('plot_no')->nullable();
            $table->integer('plot_no_rs')->nullable();
            $table->foreignId('mouza_id')->nullable()->constrained();
            $table->string('khatian_no', 50)->nullable();
            $table->float('quantity_of_land_in_katha')->nullable();
            $table->float('total_land_in_katha')->nullable();
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
        Schema::dropIfExists('plot_allocations');
    }
};

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

        Schema::create('plots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('road_no')->constrained('roads');
            $table->integer('plot_no');
            $table->foreignId('mouza_no')->constrained('mouzas');
            $table->integer('plot_no_rs');
            $table->string('khatian_no', 50);
            $table->float('quantity_of_land_katha');
            $table->float('total_land_katha');
            $table->foreignId('member_id')->nullable()->nullable()->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plots');
    }
};

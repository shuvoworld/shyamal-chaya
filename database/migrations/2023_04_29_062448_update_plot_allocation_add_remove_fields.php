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
        Schema::table('plot_allocations', function (Blueprint $table) {
            $table->integer('khatian_no_two')->nullable()->after('khatian_no');
            $table->integer('plot_no_rs_two')->nullable()->after('plot_no_rs');
            $table->string('document_information')->nullable()->after('member_id');
            $table->date('registration_date')->nullable()->after('document_information');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

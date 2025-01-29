<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('user_forms', function (Blueprint $table) {
        $table->string('work_schedule')->nullable(); // Dropdown field for work schedule
    });
}

public function down()
{
    Schema::table('user_forms', function (Blueprint $table) {
        $table->dropColumn('work_schedule');
    });
}

};

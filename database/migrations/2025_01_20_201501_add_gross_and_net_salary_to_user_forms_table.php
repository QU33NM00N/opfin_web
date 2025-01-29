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
        $table->decimal('gross_salary', 10, 2)->nullable();
        $table->decimal('net_salary', 10, 2)->nullable();
    });
}

public function down()
{
    Schema::table('user_forms', function (Blueprint $table) {
        $table->dropColumn(['gross_salary', 'net_salary']);
    });
}

};

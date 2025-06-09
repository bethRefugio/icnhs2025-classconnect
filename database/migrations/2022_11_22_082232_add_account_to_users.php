<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_allowed_login')->default(0);
            $table->foreignId('account_id')->default(3)->constrained('accounts');
            //$table->foreignId('account_id')->nullable()->constrained('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin');
            $table->dropColumn('is_allowed_login');
            $table->dropForeign(['account_id']);
            $table->dropColumn('account_id');
          });
    }
};
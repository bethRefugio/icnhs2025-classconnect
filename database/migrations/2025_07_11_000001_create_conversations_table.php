<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('conversations', function (Blueprint $table) {
          $table->id();
          $table->string('name')->nullable();
          $table->boolean('is_group')->default(false);
          $table->timestamps();
          $table->softDeletes($column = 'deleted_at', $precision = 0);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversations');
    }
}

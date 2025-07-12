<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('messages', function (Blueprint $table) {
          $table->id();
          $table->foreignId('conversation_id')->constrained('conversations')->onDelete('cascade');
          $table->foreignId('user_id')->constrained('users');
          $table->foreignId('receiver_id')->nullable()->constrained('users');
          $table->text('content');
          $table->string('type')->default('text');
          $table->timestamp('read_at')->nullable();
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
        Schema::dropIfExists('messages');
    }
}

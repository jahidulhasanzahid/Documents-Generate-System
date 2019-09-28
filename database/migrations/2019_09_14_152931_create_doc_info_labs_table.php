<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocInfoLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_info_labs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('document_id')->unsigned();
            $table->string('apparatus');
            $table->string('procedure');
            $table->timestamps();



            $table->foreign('user_id')->references('id')->on('users') ->onDelete('cascade');
            $table->foreign('document_id')->references('id')->on('documents') ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_info_labs');
    }
}

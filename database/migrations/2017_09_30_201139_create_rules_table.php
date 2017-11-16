<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned()->index();
            $table->text('testingEnvironment');
            $table->text('productionEnvironment');
            $table->text('browser');
            $table->text('documentType');
            $table->text('encode');
            $table->text('inHead');
            $table->text('directory');
            $table->text('namingRule');
            $table->text('responsive');
            $table->text('prohibited');
            $table->text('complement');
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rules');
    }
}

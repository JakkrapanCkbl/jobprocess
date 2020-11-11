<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondoTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condo_temps', function (Blueprint $table) {
            $table->string('web-scraper-order')->nullable();
            $table->string('web-scraper-start-url')->nullable();
            $table->string('pagination')->nullable();
            $table->string('pagination-href')->nullable();
            $table->string('list_project_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condo_temps');
    }
}

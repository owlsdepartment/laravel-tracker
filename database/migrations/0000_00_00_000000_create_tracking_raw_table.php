<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingRawTable extends Migration
{
    public function up()
    {
        Schema::create(config('laravel-tracker.database.table'), function (Blueprint $table) {

        });
    }

    public function down()
    {
        Schema::drop(config('laravel-tracker.database.table'));
    }
}

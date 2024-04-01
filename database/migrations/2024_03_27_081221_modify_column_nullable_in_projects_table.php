<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnNullableInProjectsTable extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('description_project')->nullable()->change();
        });
    }

    public function down()
    {
        // If you want to rollback the changes, you can define the "down" method
        Schema::table('projects', function (Blueprint $table) {
            $table->string('description_project')->change();
        });
    }
}

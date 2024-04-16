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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('pic_project')->nullable()->change();
            $table->string('status')->nullable()->change();
        });
    }

    public function down()
    {
        // If you want to rollback the changes, you can define the "down" method
        Schema::table('projects', function (Blueprint $table) {
            $table->string('pic_project')->change();
            $table->string('status')->change();
        });
    }
};

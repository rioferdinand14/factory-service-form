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
            $table->string('category_project')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // If you need to rollback, you can revert the change by setting the column back to non-nullable
        Schema::table('projects', function (Blueprint $table) {
            $table->string('category_project')->nullable(false)->change();
        });
    }
};

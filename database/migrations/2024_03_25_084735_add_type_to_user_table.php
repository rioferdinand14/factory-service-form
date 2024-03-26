<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToUserTable extends Migration
{
    public function up()
    {
        Schema::connection('cksql')->table('users', function (Blueprint $table) {
            $table->string('type')->nullable()->after('email');
        });
    }

    public function down()
    {
        Schema::connection('cksql')->table('users', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}


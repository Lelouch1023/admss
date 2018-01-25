<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeColumnsToFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
         public function up()
    {
        Schema::table('files', function($table){
            $table->boolean('isDeleted')->after('user_id')->default('0');
            $table->datetime('deleted_at')->after('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('files', function($table){

            $table->dropColumn('isDeleted');
            $table->dropColumn('deleted_at');
        });
    }
}

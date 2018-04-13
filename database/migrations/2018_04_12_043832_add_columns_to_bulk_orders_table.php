<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToBulkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bulk_orders', function (Blueprint $table) {
            $table->string('land')->after('address');
            $table->string('poststed')->after('poststed')->nullable();
            $table->string('post_number')->after('post_number');
            $table->string('tlf')->after('tlf')->nullable();
            $table->string('fax')->after('tlf')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

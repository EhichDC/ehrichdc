<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DentistContactMetaAddWebsite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dentist_contact_metas', function (Blueprint $table) {
            $table->string('website', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dentist_contact_metas', function (Blueprint $table) {
            $table->dropColumn('website');
        });
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDentistContactMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::connection()->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
        Schema::table('dentist_contact_metas', function (Blueprint $table) {
            $table->string('salutation', 64)->nullable()->change();
            $table->string('praxisname', 64)->index();
            $table->date('birthday')->nullable();
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
            $table->string('salutation', 64)->change();
            $table->dropColumn('praxisname', 64);
            $table->dropColumn('birthday');
        });
    }
}

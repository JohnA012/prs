<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_mtce_user_dtls', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')
                    ->unsigned()
                    ->index()
                    ->nullable();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('tbl_mtce_user_hdr');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('contact_no', 50);
            $table->string('gender', 50);
            $table->timestamp('birth_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_mtce_user_dtls');
        // $table->dropForeign('lists_user_id_foreign');
        // $table->dropIndex('lists_user_id_index');
        // $table->dropColumn('user_id');
    }
};

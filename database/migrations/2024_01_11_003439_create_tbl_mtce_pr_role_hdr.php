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
        Schema::create('tbl_mtce_pr_role_hdr', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->integer('role_status');
            $table->bigInteger('created_by')
                    ->unsigned()
                    ->index()
                    ->nullable();
            $table->foreign('created_by')
                    ->references('id')
                    ->on('tbl_mtce_user_hdr');
            $table->bigInteger('last_updatedBy')
                    ->unsigned()
                    ->index()
                    ->nullable();
            $table->foreign('last_updatedBy')
                    ->references('id')
                    ->on('tbl_mtce_user_hdr');
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
        Schema::dropIfExists('tbl_mtce_pr_role_hdr');
    }
};

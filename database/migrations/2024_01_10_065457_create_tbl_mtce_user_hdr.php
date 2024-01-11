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
        Schema::create('tbl_mtce_user_hdr', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('employee_id');
            $table->integer('department_id');
            $table->string('old_password')->nullable();
            $table->integer('created_by');
            $table->integer('last_updatedBy');
            $table->bigInteger('user_status')
                   ->unsigned()
                   ->index()
                   ->nullable();
            $table->foreign('user_status')
                   ->references('id')
                   ->on('tbl_mtce_user_hdr_statuses');
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
        Schema::dropIfExists('tbl_mtce_user_hdr');
    }
};

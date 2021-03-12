<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table
                ->foreignUuid("reason_id")
                ->references('id')
                ->on("reasons")
                ->onDelete("cascade");
            $table
            ->foreignUuid("role_id")
            ->references('id')
            ->on("roles")
            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(["reason_id"]);
            $table->dropColumn(["reason_id"]);
            $table->dropForeign(["role_id"]);
            $table->dropColumn(["role_id"]);
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meetings', function (Blueprint $table) {
            $table
                ->foreignUuid("user_id")
                ->references('id')
                ->on("users")
                ->onDelete("cascade");
            $table
            ->foreignUuid("place_id")
            ->references('id')
            ->on("places")
            ->onDelete("cascade");
            $table
                ->foreignUuid("target_id")
                ->references('id')
                ->on("targets")
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
        Schema::table('meetings', function (Blueprint $table) {
            $table->dropForeign(["user_id"]);
            $table->dropColumn(["users_id"]);
            $table->dropForeign(["place_id"]);
            $table->dropColumn(["place_id"]);
            $table->dropForeign(["target_id"]);
            $table->dropColumn(["target_id"]);
        });
    }
}

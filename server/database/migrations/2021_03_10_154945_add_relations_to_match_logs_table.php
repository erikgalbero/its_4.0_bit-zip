<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToMatchLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('match_logs', function (Blueprint $table) {
            $table
                ->foreignUuid("user_id")
                ->references('id')
                ->on("users")
                ->onDelete("cascade");
            $table
            ->foreignUuid("meeting_id")
            ->references('id')
            ->on("meetings")
            ->onDelete("cascade");
            $table
                ->foreignUuid("reason_id")
                ->references('id')
                ->on("reasons")
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
        Schema::table('match_logs', function (Blueprint $table) {
            $table->dropForeign(["user_id"]);
            $table->dropColumn(["users_id"]);
            $table->dropForeign(["meeting_id"]);
            $table->dropColumn(["meeting_id"]);
            $table->dropForeign(["reason_id"]);
            $table->dropColumn(["reason_id"]);
        });
    }
}

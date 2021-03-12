<?php

use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $Admin = new Role();
        $Admin->role = "admin";
        $Admin->id = "0";
        $Admin->save();

        $OspiteSaltuario = new Role();
        $OspiteSaltuario->role = "ospite saltuario";
        $OspiteSaltuario->id = "1";
        $OspiteSaltuario->save();

        $OspiteFisso = new Role();
        $OspiteFisso->role = "ospite fisso";
        $OspiteFisso->id = "2";
        $OspiteFisso->save();

        $Dipendente = new Role();
        $Dipendente->role = "dipendente";
        $Dipendente->id = "3";
        $Dipendente->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
        Schema::dropIfExists('ospite saltuario');
        Schema::dropIfExists('ospite fisso');
        Schema::dropIfExists('dipendente');
    }
}

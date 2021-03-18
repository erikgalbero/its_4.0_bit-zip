<?php

use App\Models\Reason;
use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReasons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $Colloquio = new Reason();
        $Colloquio->id = "037972a3-87cb-11eb-a7fa-c85b76c9eb36";
        $Colloquio->text = "Colloquio";
        $Colloquio->save();

        $Appuntamento = new Reason();
        $Appuntamento->id = "a36e2d12-87c9-11eb-a7fa-c85b76c9eb36";
        $Appuntamento->text = "Appuntamento";
        $Appuntamento->save();

        $Evento = new Reason();
        $Evento->id = "454d0598-87cb-11eb-a7fa-c85b76c9eb36";
        $Evento->text = "Evento";
        $Evento->save();

        $Visita = new Reason();
        $Visita->id = "afba5112-87c9-11eb-a7fa-c85b76c9eb36";
        $Visita->text = "Visita";
        $Visita->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('037972a3-87cb-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('a36e2d12-87c9-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('454d0598-87cb-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('afba5112-87c9-11eb-a7fa-c85b76c9eb36');
    }
}

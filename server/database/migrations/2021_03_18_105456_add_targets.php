<?php

use App\Models\Target;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTargets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        $Mauro = new Target();
        $Mauro->id = "55c35f24-87d9-11eb-a7fa-c85b76c9eb36";
        $Mauro->name = "Mauro";
        $Mauro->surname = "Verdi";
        $Mauro->phone = "0000000000";
        $Mauro->email = "mauro@311verona.it";
        $Mauro->save();

        $Antonello = new Target();
        $Antonello->id = "7447fa43-87d9-11eb-a7fa-c85b76c9eb36";
        $Antonello->name = "Antonello";
        $Antonello->surname = "Vedovato";
        $Antonello->phone = "111111111";
        $Antonello->email = "antonello@311verona.it";
        $Antonello->save();

        $Sara = new Target();
        $Sara->id = "9582d9cc-87d8-11eb-a7fa-c85b76c9eb36";
        $Sara->name = "Sara";
        $Sara->surname = "Vedovato";
        $Sara->phone = "2222222222";
        $Sara->email = "sara@311verona.it";
        $Sara->save();

        $Michele = new Target();
        $Michele->id = "b13d31a1-87d8-11eb-a7fa-c85b76c9eb36";
        $Michele->name = "Michele";
        $Michele->surname = "Zavatteri";
        $Michele->phone = "33333333333";
        $Michele->email = "michele@311verona.it";
        $Michele->save();

        
        $Enrico = new Target();
        $Enrico->id = "ebc05998-87d8-11eb-a7fa-c85b76c9eb36";
        $Enrico->name = "Enrico";
        $Enrico->surname = "Olioso";
        $Enrico->phone = "4444444444";
        $Enrico->email = "enrico@311verona.it";
        $Enrico->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('55c35f24-87d9-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('7447fa43-87d9-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('9582d9cc-87d8-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('b13d31a1-87d8-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('ebc05998-87d8-11eb-a7fa-c85b76c9eb36');

    }
}

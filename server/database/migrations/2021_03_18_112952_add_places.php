<?php

use App\Models\Place;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPlaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $Uxlab = new Place();
        $Uxlab->id = "447329f1-87df-11eb-a7fa-c85b76c9eb36";
        $Uxlab->name = "Uxlab";
        $Uxlab->save();

        $sharp = new Place();
        $sharp->id = "447339dd-87df-11eb-a7fa-c85b76c9eb36";
        $sharp->name = "Sharp";
        $sharp->save();


        $Maxfone3 = new Place();
        $Maxfone3->id = "44735186-87df-11eb-a7fa-c85b76c9eb36";
        $Maxfone3->name = "Maxfone3";
        $Maxfone3->save();

        
        $Maxfone2 = new Place();
        $Maxfone2->id = "44735c9f-87df-11eb-a7fa-c85b76c9eb36";
        $Maxfone2->name = "Maxfone2";
        $Maxfone2->save();

        $Maxfone1 = new Place();
        $Maxfone1->id = "447367bf-87df-11eb-a7fa-c85b76c9eb36";
        $Maxfone1->name = "Maxfone1";
        $Maxfone1->save();

        $Maxfone4 = new Place();
        $Maxfone4->id = "447345c0-87df-11eb-a7fa-c85b76c9eb36";
        $Maxfone4->name = "Maxfone4";
        $Maxfone4->save();

        $Amministrazione = new Place();
        $Amministrazione->id = "44737eb7-87df-11eb-a7fa-c85b76c9eb36";
        $Amministrazione->name = "Amministrazione Edulife";
        $Amministrazione->save();

        $vresearch = new Place();
        $vresearch->id = "4473dff0-87df-11eb-a7fa-c85b76c9eb36";
        $vresearch->name = "V-research";
        $vresearch->save();

        
        $openspace = new Place();
        $openspace->id = "44738af0-87df-11eb-a7fa-c85b76c9eb36";
        $openspace->name = "311-openSpace";
        $openspace->save();

        $edulife = new Place();
        $edulife->id = "44737323-87df-11eb-a7fa-c85b76c9eb36";
        $edulife->name = "Edulife";
        $edulife->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('447329f1-87df-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('447339dd-87df-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('44735186-87df-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('44735c9f-87df-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('447367bf-87df-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('447345c0-87df-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('44737eb7-87df-11eb-a7fa-c85b76c9eb36');        
        Schema::dropIfExists('4473dff0-87df-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('44738af0-87df-11eb-a7fa-c85b76c9eb36');
        Schema::dropIfExists('44737323-87df-11eb-a7fa-c85b76c9eb36');
    }
}

<?php

use App\Models\Club;
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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id("club_id");
            $table->date("establishment");
            $table->string("location");
            $table->integer("max_number");
            $table->timestamps();
        });

        Club::create('2010-10-20', 'Tököl', 200);
        Club::create('2009-01-19', 'Szigethalom', 200);
        Club::create('1999-12-11', 'Budapest', 150);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubs');
    }
};

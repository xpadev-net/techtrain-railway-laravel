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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date("screening_date");
            $table->unsignedBigInteger("schedule_id");
            $table->unsignedBigInteger("sheet_id");
            $table->char("email",255);
            $table->char("name",255);
            $table->timestamps();
            $table->foreign("schedule_id")->references("id")->on("schedules");
            $table->foreign("sheet_id")->references("id")->on("sheets");
            $table->unique(["schedule_id","sheet_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
};

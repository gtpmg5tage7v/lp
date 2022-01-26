<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',20);
            $table->string('telephone',13);
            $table->string('email',191);
            $table->string('zip',20);
            $table->string('address1',191);
            $table->string('address2',191);
            $table->string('address3',191)->nullable();
            $table->string('payment',191)->nullable();
            $table->string('name2',20)->nullable();
            $table->string('telephone2',13)->nullable();
            $table->string('zip2',20)->nullable();
            $table->string('address4',191)->nullable();
            $table->string('address5',191)->nullable();
            $table->string('address6',191)->nullable();
            $table->string('price',191)->nullable();
            $table->string('status')->nullable()->default(0);
            $table->string('advertisingcode',191)->nullable();
            
            $table->string('month')->nullable();
            $table->string('date')->nullable();
            $table->string('year')->nullable();
            
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
        Schema::dropIfExists('members');
    }
}

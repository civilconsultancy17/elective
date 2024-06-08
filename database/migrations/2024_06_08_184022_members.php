<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
      
        Schema::create('members', function (Blueprint $table) {           
            $table->bigIncrements('id'); 
            $table->string('fullName');           
                                             
            //$table -> unsignedBigInteger('userId');//foreign key from reg_users table
            $table->timestamps();
             // Foreign key constraint          
            // $table->foreign('userId')->references('id')->on('members');

            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};

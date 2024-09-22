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
        Schema::create('ssp', function (Blueprint $table) {
            $table->id();
		    $table->string('CSV_ID');
		    $table->string('NAME');
		    $table->string('BANK');
		    $table->string('ADD1');
		    $table->string('ADD2');
		    $table->date('BIRTH');
		    $table->string('PTYPE');
		    $table->string('GROUPING');
		    $table->string('STATUS');
		    $table->string('CONMONTH');
		    $table->string( 'READYX');
		    $table->string( 'branch_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ssp');
    }
};

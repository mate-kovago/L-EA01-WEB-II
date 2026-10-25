
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->string('cim');
            $table->integer('gyartas');
            $table->integer('hossz')->nullable();
            $table->date('bemutato')->nullable();
            $table->boolean('YouTube')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};

/*
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*
    public function up(): void
    {
        Schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->string('cim');
            $table->integer('gyartas');
            $table->integer('hossz')->nullable();
            $table->date('bemutato')->nullable();
            $table->bool('YouTube')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    /*
    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};
*/
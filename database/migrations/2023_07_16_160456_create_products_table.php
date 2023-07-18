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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('images')->nullable();
            $table->string('thetoysize')->nullable();
            $table->string('assembled_uz')->nullable();
            $table->string('assembled_ru')->nullable();
            $table->string('assembled_en')->nullable();
            $table->string('packedsize')->nullable();
            $table->text('productioncertificate')->nullable();
            $table->string('Typeofgrouppackaging_uz')->nullable();
            $table->string('Typeofgrouppackaging_ru')->nullable();
            $table->string('Typeofgrouppackaging_en')->nullable();
            $table->string('amountinapackage_uz')->nullable();
            $table->string('amountinapackage_ru')->nullable();
            $table->string('amountinapackage_en')->nullable();
            $table->string('namesoftoys_uz')->nullable();
            $table->string('namesoftoys_ru')->nullable();
            $table->string('namesoftoys_en')->nullable();
            $table->integer('vendorcode')->nullable();
            $table->text('title_uz')->nullable();
            $table->text('title_ru')->nullable();
            $table->text('title_en')->nullable();
            $table->integer('numberofstars');
            $table->string('slug')->nullable();





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

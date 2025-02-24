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
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visit_id')->constrained('visits')->onDelete('cascade'); 
            $table->string('organisation_name');
            $table->string('site_name');
            $table->string('company_registration_number')->nullable();
            $table->string('geographical_coordinates')->nullable();
            $table->text('address');
            $table->string('contact_person');
            $table->string('email')->unique();
            $table->string('telephone_number');
            $table->integer('number_of_employees')->nullable();
            $table->text('facility_description')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_details');
    }
};

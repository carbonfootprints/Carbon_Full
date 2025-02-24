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
        Schema::create('indirectsecondformtwo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visit_id')->constrained('visits')->onDelete('cascade');
            $table->date('date_of_sale');
            $table->string('invoice_number')->unique();
            $table->string('customer');
            $table->decimal('area_sqft', 10, 2)->default(0);
            $table->decimal('weight_tonnes', 10, 2)->default(0);
            $table->string('location_of_customer');
            $table->decimal('distance_km', 10, 2)->default(0);
            $table->decimal('t_km', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indirectsecondformtwo');
    }
};

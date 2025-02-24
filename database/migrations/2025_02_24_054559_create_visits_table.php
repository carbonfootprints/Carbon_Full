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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('visit_code')->unique();
            $table->boolean('company_details')->default(false);
            $table->boolean('directformone')->default(false);
            $table->boolean('directformtwo')->default(false);
            $table->boolean('directformthree')->default(false);
            $table->boolean('indirectfirstformone')->default(false);
            $table->boolean('indirectfirstformtwo')->default(false);
            $table->boolean('indirectsecondformone')->default(false);
            $table->boolean('indirectsecondformtwo')->default(false);
            $table->boolean('indirectsecondformthree')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};

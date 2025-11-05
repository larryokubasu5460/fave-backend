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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            //basic contact info
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            
            //event details
            $table->string('event_type'); //wedding, corporate, birthday
            $table->date('event_date')->nullable();
            $table->string('location')->nullable();
            $table->decimal('budget',10,2)->nullable();
            $table->text('notes')->nullable();

            // internal management
            $table->string('status')->default('pending'); //pending | confirmed | completed | cancelled

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

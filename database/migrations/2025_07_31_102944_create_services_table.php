<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();

            // Category from the 11 types
            $table->enum('category', [
                'Web Development',
                'Mobile App Development',
                'UI/UX & Design',
                'Digital Marketing & SEO',
                'Software & Automation',
                'Cloud & DevOps',
                'Cybersecurity',
                'Multimedia & Visuals',
                'AI & Data Services',
                'E-commerce Solutions',
                'Business & Enterprise Solutions'
            ]);

            $table->decimal('price', 10, 2);
            $table->unsignedTinyInteger('discount_percentage')->default(0);

            $table->float('reviews', 2, 1)->default(0)->unsigned();

            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();

            $table->string('estimated_delivery_time'); // e.g., "3-5 days" or "72 hours"
            
            $table->boolean('is_featured')->default(false);
            $table->enum('status', ['active', 'inactive'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
}

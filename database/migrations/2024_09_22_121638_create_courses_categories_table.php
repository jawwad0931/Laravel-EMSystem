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
        Schema::create('courses_categories', function (Blueprint $table) {
            $table->id(); // Primary key, auto-incremented
            $table->string('CourseIcon')->nullable(); // Field for the course icon, can store URL or icon class
            $table->string('CourseName'); // Field for the course name
            $table->text('CourseDescription')->nullable(); // Field for the course description, allowing text for detailed descriptions
            $table->timestamps(); // Fields for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_categories');
    }
};

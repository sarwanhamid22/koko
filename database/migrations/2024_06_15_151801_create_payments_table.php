<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->string('academic_year');
            $table->json('payment_type');
            $table->decimal('amount', 10, 2);
            $table->date('payment_date');
            $table->boolean('status');
            $table->text('description')->nullable();
            $table->string('class'); // Add this line to include the class column
            $table->softDeletes(); // Add this line to include soft deletes
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}

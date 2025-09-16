<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('id_card_requisitions', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->string('employee_id');
            $table->integer('reason');
            $table->integer('division_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('id_card_requisitions');
    }
};

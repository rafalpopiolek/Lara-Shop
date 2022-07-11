<?php

use App\enums\PaymentStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->enum('status', PaymentStatus::TYPES)->default(PaymentStatus::IN_PROGRESS);
            $table->integer('error_code')->nullable();
            $table->string('error_description', 1500)->nullable();
            $table->string('session_id', 100)->nullable();
            $table->timestamps();

            $table->foreignId('order_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};

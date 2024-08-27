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
        Schema::create('refund_admins', function (Blueprint $table) {
            $table->id();
            $table->string('orderId')->unique(); // Menggunakan unique() daripada primary()
            $table->string('customerName');
            $table->string('sellerName');
            $table->decimal('total', 14, 2);
            $table->date('dueDate');
            $table->string('status');
            $table->string('reasonComplaint');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refund_admins');
    }
};

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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->text('notes')->nullable();
            $table->string('delivery_method'); // 'delivery' or 'takeaway'
            $table->text('address')->nullable();
            $table->string('payment_method'); // 'cod' or 'qris'
            $table->integer('qty_refill_biasa')->default(0);
            $table->integer('qty_refill_premium')->default(0);
            $table->integer('qty_galon_baru')->default(0);
            $table->integer('qty_pompa_elektrik')->default(0);
            $table->integer('subtotal');
            $table->integer('ongkir');
            $table->integer('total_amount');
            $table->string('payment_status')->default('pending'); // 'pending', 'paid'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

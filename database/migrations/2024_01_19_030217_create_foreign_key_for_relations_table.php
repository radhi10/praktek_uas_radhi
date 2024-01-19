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
        Schema::table('relations', function (Blueprint $table) {
            $table->foreign('produk_kproduk')->references('kode_produk')->on('produks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pesanan_kpesanan')->references('kode_pesanan')->on('pesanans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pembayaran_kpembayaran')->references('kode_pembayaran')->on('pembayarans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('relations', function (Blueprint $table) {
        // $table->dropForeign('relations_user_id_foreign');

        $table->dropForeign('relations_produk_kproduk_foreign');
        $table->dropForeign('relations_pesanan_kpesanan_foreign');
        $table->dropForeign('relations_pembayaran_kpembayaran_foreign');
      });
}
};
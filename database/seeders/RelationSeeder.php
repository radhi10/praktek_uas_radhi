<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'produk_kproduk' => '0001',
            'pesanan_kpesanan' => '0001',
            'pembayaran_kpembayaran' => '0001',
            'status_pembayaran' => 'Sudah',
        ]);
    }
}

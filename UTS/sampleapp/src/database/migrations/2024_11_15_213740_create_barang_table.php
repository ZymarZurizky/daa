<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 100)->notNull();
            $table->foreignId('id_kategori')->constrained('kategori');
            $table->foreignId('id_supplier')->constrained('supplier');
            $table->decimal('harga', 10, 2)->notNull();
            $table->integer('stok')->notNull();
            $table->date('tanggal_masuk')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
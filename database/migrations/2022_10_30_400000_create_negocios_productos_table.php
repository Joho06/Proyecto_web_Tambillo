<?php

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
        Schema::create('negocios_productos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('producto_id')
            ->nullable()
            ->constrained('productos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('negocio_id')
            ->nullable()
            ->constrained('negocios')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            // $table->unsignedBigInteger('producto_id');
            // $table->foreign('producto_id')->nullable()->references('id')->on('productos')->onDelete('cascade');

            // $table->unsignedBigInteger('negocio_id');
            // $table->foreign('negocio_id')->nullable()->references('id')->on('negocios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_negocios');
        Schema::dropIfExists('negocios_productos');
        Schema::dropIfExists('negocio_producto');

    }
};

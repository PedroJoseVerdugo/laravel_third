<?php

use App\Models\Tarea;
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
                $tarea = new Tarea();
                $tarea->nombre = 'Tarea 1';
                $tarea->fecha_inicio = '2023-09-10';
                $tarea->fecha_fin = '2023-09-15';
                $tarea->asignado_a = 'Juan';
                $tarea->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roles_id');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->boolean('estado')->default(true);
            $table->timestamps();

            // Clave foránea
            $table->foreign('roles_id')->references('id')->on('roles');
        });
    }

    public function down(): void {
        Schema::dropIfExists('usuarios');
    }
};

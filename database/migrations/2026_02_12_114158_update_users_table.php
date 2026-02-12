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
        Schema::table('users', function (Blueprint $table) {

            // 1️⃣ Renommer name en nom
            $table->renameColumn('name', 'nom');

            // 2️⃣ Ajouter de nouveaux champs
            $table->string('prenom')->after('nom');
            $table->string('filiere');
            $table->string('niveau');
            $table->date('date_naissance');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            // Annulation (rollback)
            $table->renameColumn('nom', 'name');

            $table->dropColumn(['prenom', 'filiere', 'niveau', 'date_naissance']);
        });
    }
};

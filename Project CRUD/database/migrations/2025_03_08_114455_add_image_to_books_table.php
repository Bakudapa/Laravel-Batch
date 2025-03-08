<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToBooksTable extends Migration

{
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('image')->nullable()->after('stock');
        });
    }

    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
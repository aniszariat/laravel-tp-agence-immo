<?php

use App\Models\Option;
use App\Models\Property;
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
        Schema::create('option_property', function (Blueprint $table) {
            $table->foreignIdFor(Option::class);
            $table->foreignIdFor(Property::class);
            $table->primary(['option_id', 'property_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('option_property');
    }
};

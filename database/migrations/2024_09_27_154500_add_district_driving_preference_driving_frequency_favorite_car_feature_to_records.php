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
        Schema::table('records', function (Blueprint $table) {
            $table->enum('district', [
                'Daun Penh', 'Chamkar Mon', 'Tuol Kork', 'Prampi Makara', 'Dangkao',
                'Mean Chey', 'Russey Keo', 'Sen Sok', 'Pur Senchey', 'Chbar Ampov',
                'Boeng Keng Kang', 'Chroy Changvar'
            ])->after('id');
            $table->enum('driving_purpose', ['Work/School', 'Travel', 'Vacation', 'Shopping', 'Family Trip', 'Pick Up', 'Delivery', 'Other'])->after('district');
            $table->enum('driving_frequency', ['Daily', 'Once in a week', 'Several times a week', 'A few times per month', 'Rarely'])->after('driving_purpose');
            $table->enum('favorite_car_feature', ['Color', 'Speed', 'Fuel Efficiency', 'Comfort', 'Safety', 'Technology'])->after('driving_frequency');
            $table->dropColumn(columns: 'job_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('records', function (Blueprint $table) {
            $table->string('job_title');
            $table->dropColumn('district');
            $table->dropColumn('driving_purpose');
            $table->dropColumn('driving_frequency');
            $table->dropColumn('favorite_car_feature');
        });
    }
};

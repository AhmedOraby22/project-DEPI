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
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique()->index();
                $table->string('password');
                $table->string('status')->default(1);
                $table->string('rate')->nullable();
                $table->string('avatar')->nullable();
                $table->string('gender')->nullable();
                $table->string('phone')->nullable();
                $table->date('birthdate')->nullable();
                $table->string('role')->default(1);
                $table->bigInteger('country_id')->unsigned()->index()->nullable();
                $table->bigInteger('city_id')->unsigned()->index()->nullable();
                $table->bigInteger('department_id')->unsigned()->index()->nullable();
                $table->timestamps();
            });
        } else {
            Schema::table('users', function (Blueprint $table) {
                if (!Schema::hasColumn('users', 'role')) {
                    $table->string('role')->default(1);
                }
            });
        }
    
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }
    public function down(): void
{
    Schema::dropIfExists('sessions');

    // إذا كنت تريد فقط إزالة العمود role من الجدول users دون حذفه
    if (Schema::hasTable('users')) {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'role')) {
                $table->dropColumn('role');
            }
        });
    } else {
        Schema::dropIfExists('users');
    }
}

};

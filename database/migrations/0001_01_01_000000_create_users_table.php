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

        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('email')->unique()->index();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status')->default(1);


            // $table->string('phone')->unique();

            $table->string('rate')->default(0)->nullable();

            $table->string('gender')->default(1)->nullable();

            // $table->date('birthdate');

            $table->boolean('is_admin')->default(0);

            $table->string('avatar')->nullable(); // Profile image

            $table->rememberToken();


            $table->string('rate')->nullable();
           
            $table->string('phone')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('role')->default(1);
            $table->bigInteger('country_id')->unsigned()->index()->nullable();
            $table->bigInteger('city_id')->unsigned()->index()->nullable();
            $table->bigInteger('department_id')->unsigned()->index()->nullable();


            $table->timestamps();


        });
 
     
=======
            $table->timestamps();
        });
 
        // Schema::create('password_reset_tokens', function (Blueprint $table) {

        //     $table->string('email')->primary();

        //     $table->string('token');

        //     $table->timestamp('created_at')->nullable()
        // });
>>>>>>> e49d0022293cd62dac293a14f74eef7230dafbc4
 
        Schema::create('sessions', function (Blueprint $table) {

            $table->string('id')->primary();

            $table->foreignId('user_id')->nullable()->index();

            $table->string('ip_address', 45)->nullable();

            $table->text('user_agent')->nullable();

            $table->longText('payload');

            $table->integer('last_activity')->index();

        });

    }
 

    /**

     * Reverse the migrations.

     */

    public function down(): void

    {

        Schema::dropIfExists('sessions');

        Schema::dropIfExists('password_reset_tokens');

        Schema::dropIfExists('users');

    }


=======
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('sessions');
    }

>>>>>>> e49d0022293cd62dac293a14f74eef7230dafbc4
};

 


 

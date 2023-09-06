<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supporters', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable()->default('');
            $table->string('phone')->default('');
            $table->timestamp('date_of_birth')->nullable()->default(null); // Thay đổi giá trị mặc định của trường date_of_birth
            $table->string('email')->default('');
            $table->string('banking_id')->default('');
            $table->string('status')->default('inactive');
            $table->binary('zalo_qr')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supporters');
    }
}

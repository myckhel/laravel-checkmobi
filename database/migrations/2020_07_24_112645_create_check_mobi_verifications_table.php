<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckMobiVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_mobi_verifications', function (Blueprint $table) {
            $table->id();
            $table->string('number', 30)->index();
            $table->string('cc', 6);
            $table->boolean('validated')->default(false);
            $table->timestamp('retry_at')->nullable(null);
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
        Schema::dropIfExists('check_mobi_verifications');
    }
}

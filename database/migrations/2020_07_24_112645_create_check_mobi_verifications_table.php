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
            $table->string('id', 100)->unique();
            $table->string('number', 30)->index();
            $table->string('cc', 6);
            $table->string('type', 30)->index(); // eg reverse_cli
            $table->string('cli_prefix', 30)->nullable();
            $table->boolean('validated')->default(false);
            $table->dateTimeTz('retry_at')->nullable(null);
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

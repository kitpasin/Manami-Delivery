<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_statuses', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable();
            $table->string('language');
            $table->integer('display')->default(true);
            $table->unique(['language', 'id']);
            $table->timestamps();
        });

        DB::table('order_statuses')->insert([
            [
                'id' => 1,
                'name' => 'waitconfirm',
                'language' => 'th',
                'display' => true,
            ],
            [
                'id' => 2,
                'name' => 'pending',
                'language' => 'th',
                'display' => true,
            ],
            [
                'id' => 3,
                'name' => 'inprogress',
                'language' => 'th',
                'display' => true,
            ],
            [
                'id' => 4,
                'name' => 'complete',
                'language' => 'th',
                'display' => true,
            ],
            [
                'id' => 5,
                'name' => 'failed',
                'language' => 'th',
                'display' => true,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_statuses');
    }
};

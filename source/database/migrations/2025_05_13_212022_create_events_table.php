<?php

// database/migrations/xxxx_xx_xx_create_events_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('slug')->unique();
    $table->dateTime('date');
    $table->time('time');
    $table->string('location');
    $table->string('image');
    $table->text('description');
    $table->boolean('registration_required')->default(false);
    $table->integer('max_participants')->nullable();
    $table->dateTime('registration_deadline')->nullable();
    $table->json('schedule')->nullable();
    $table->timestamps();
    // $table->date('date'); // Instead of dateTime
});
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}

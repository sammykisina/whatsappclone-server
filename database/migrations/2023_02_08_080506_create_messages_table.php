<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->foreignId(column: 'conversation_id')
                ->index()
                ->constrained();
            $table->text(column: 'body');

            $table->unsignedBigInteger(column: 'sender_id');
            $table->foreign(columns:'sender_id')
                ->references(columns: 'id')
                ->on(table: "users");

            $table->unsignedBigInteger(column: 'receiver_id');
            $table->foreign(columns:'receiver_id')
                ->references(columns: 'id')
                ->on(table: "users");

            $table->boolean(column: 'read')
                ->default(false)
                ->nullable();

            $table->string(column: 'type')->nullable();
            $table->timestamps();
        });
    }
};

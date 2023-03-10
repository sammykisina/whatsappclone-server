<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid(column: 'uuid')->unique();

            $table->string(column: 'name');
            $table->string(column: 'email')->unique();
            $table->string(column: 'password');
            $table->rememberToken();
            
            $table->timestamp(column: 'email_verified_at')->nullable();
            $table->timestamps();
        });
    }
};

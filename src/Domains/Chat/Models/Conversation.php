<?php

declare(strict_types=1);

namespace Domains\Chat\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model {
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'last_time_message'
    ];

    public function messages(): HasMany {
        return $this->hasMany(
            related: Message::class,
            foreignKey: 'conversation_id'
        );
    }
}

<?php

declare(strict_types=1);

namespace Domains\Chat\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model {
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'conversation_id',
        'read',
        'type',
        'body'
    ];

    public function conversation(): BelongsTo {
        return $this->belongsTo(
            related: Conversation::class,
            foreignKey: 'conversation_id'
        );
    }
}

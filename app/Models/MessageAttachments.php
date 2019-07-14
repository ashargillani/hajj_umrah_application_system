<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageAttachments extends Model
{
    protected $table = 'provider_message_attachments';
    protected $fillable = ['message_id', 'filename', 'seen_by_admin'];

    public function message()
    {
        return $this->belongsTo(ProviderMessages::class);
    }
}

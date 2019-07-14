<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderMessages extends Model
{
    protected $guarded = ['id'];

    public function attachments() {
        return $this->hasMany(MessageAttachments::class, 'message_id');
    }
}

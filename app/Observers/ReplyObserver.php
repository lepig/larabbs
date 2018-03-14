<?php

namespace App\Observers;

use App\Models\Reply;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function creating(Reply $reply)
    {
        
    }

    public function updating(Reply $reply)
    {
        //
    }

    public function created(Reply $reply)
    {
        $reply->topic->increment('reply_count', +1);
    }
}
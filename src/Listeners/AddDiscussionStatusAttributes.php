<?php

namespace Flarum\Statuses\Listeners;

use Flarum\Api\Event\Serializing;
use Flarum\Discussion\Discussion;
use Illuminate\Contracts\Events\Dispatcher;

class AddDiscussionStatusAttributes
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(Serializing::class, [$this, 'addAttributes']);
    }

    public function addAttributes(Serializing $event)
    {
        if ($event->isSerializer(\Flarum\Api\Serializer\DiscussionSerializer::class)) {
            $event->attributes['status'] = $event->model->status;
        }
    }
}
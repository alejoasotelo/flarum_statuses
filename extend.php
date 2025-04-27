<?php

use Flarum\Extend;
use Flarum\Api\Serializer\DiscussionSerializer;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '<link rel="stylesheet" href="/assets/extensions/flarum-statuses/styles.css">';
        }),

    (new Extend\Locales(__DIR__ . '/locale')),

    (new Extend\ApiSerializer(DiscussionSerializer::class))
        ->attributes(function ($discussion, $attributes) {
            $attributes['status'] = $discussion->status;
            return $attributes;
        }),
];
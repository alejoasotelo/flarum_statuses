<?php

namespace Flarum\Statuses;

use Flarum\Database\AbstractModel;

class Status extends AbstractModel
{
    protected $table = 'discussion_statuses';

    protected $fillable = ['discussion_id', 'status'];

    public function discussion()
    {
        return $this->belongsTo('Flarum\Discussion\Discussion');
    }
}
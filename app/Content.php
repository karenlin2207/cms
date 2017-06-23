<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'title', 'uri_name', 'content_first', 'has_first_part', 'img_uri', 'content', 'last_update_user_id'
    ];
}

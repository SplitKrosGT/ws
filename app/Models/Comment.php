<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = null;

    protected $table = 'cards';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['card_id', 'comment_text', 'card_likes', 'card_dislikes'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}

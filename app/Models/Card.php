<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $updated_at = null;
    protected $created_at = null;
    protected $table = 'cards';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['card_text', 'card_likes'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}

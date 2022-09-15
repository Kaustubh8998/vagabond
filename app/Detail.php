<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class Detail extends Model
{
    /**
     * The database table used by the model.
     */

    protected $table = 'details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id', 'title', 'text', 'order'
    ];

    public function item() {
        return $this->belongsTo('App\Item');
    }

}

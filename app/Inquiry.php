<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
use Carbon\Carbon;

class Inquiry extends Model
{
    /**
     * The database table used by the model.
     */

    protected $table = 'inquiries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id', 'name', 'email', 'number', 'comments'
    ];

    public function item() {
        return $this->belongsTo('App\Item');
    }  

}

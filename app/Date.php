<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
use Carbon\Carbon;

class Date extends Model
{
    /**
     * The database table used by the model.
     */

    protected $table = 'dates';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id', 'event_date', 'event_end_date', 'cost',  'diff_cost_one', 'diff_cost_one_label', 'diff_cost_two', 'diff_cost_two_label', 'diff_cost_three', 'diff_cost_three_label', 'payment_link'
    ];

    public function item() {
        return $this->belongsTo('App\Item');
    }

    public function getEventDateAttribute($date) {
        return Carbon::parse($date)->format('M d, Y');
    }

    public function getEventEndDateAttribute($date) {
        if($date) {
            return Carbon::parse($date)->format('M d, Y');
        } else {
            return null;
        }
    }

    public function setEventEndDateAttribute($date) {
        if($date) { 
            $this->attributes['event_end_date'] = $date;
        }
    }   

}

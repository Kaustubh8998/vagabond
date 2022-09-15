<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
use Carbon\Carbon;

class Item extends Model
{
    /**
     * The database table used by the model.
     */

    protected $table = 'items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'image', 'category_id', 'tiny_description', 'description', 'banner', 'location', 'duration', 'difficulty_level', 'sleeping_bag_rental', 'cost', 'payment_link', 'meta_title', 'meta_description', 'meta_keywords', 'media_title', 'diff_cost_one', 'diff_cost_one_label', 'diff_cost_two', 'diff_cost_two_label', 'diff_cost_three', 'diff_cost_three_label'
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }
    
    public function testimonials() {
        return $this->morphMany('App\Testimonial', 'testimonialable');
    }

    public function images() {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function details() {
        return $this->hasMany('App\Detail', 'item_id')->orderBy('order');
    }

    public function dates() {
        return $this->hasMany('App\Date', 'item_id');
    }

    public function upcoming() {
        return $this->hasMany('App\Date', 'item_id')->whereDate('event_date', '>', Carbon::yesterday())->orderBy('event_date');
    }

    public function upcomingone() {
        return $this->hasMany('App\Date', 'item_id')->whereDate('event_date', '>', Carbon::yesterday())->orderBy('event_date')->take(1);
    }

    public function getInclusionsAttribute($inclusions) {
        return explode(',', $inclusions);
    }

    public function getExclusionsAttribute($exclusions) {
        return explode(',', $exclusions);
    }

    public function setImageAttribute($image) {

        if(gettype($image) === 'string') {

            $this->attributes['image'] = $image;

        } else {

            if($image) {

                if(isset($this->attributes['image'])) {

                    if($this->attributes['image'] != '') {

                        File::delete($this->attributes['image']);

                    }

                }

                $imageName = sha1(time()).'.'.$image->getClientOriginalExtension(); 

                $directory = 'uploads/item/images'; 

                if(!File::exists($directory)) {
                    File::makeDirectory($directory, 0775, true);
                }

                $path = $directory.'/'.$imageName;

                $image->move($directory, $imageName);

                $this->attributes['image'] = $path;

            }

        }    
    }

    public function setBannerAttribute($banner) {

        if(gettype($banner) === 'string') {

            $this->attributes['banner'] = $banner;

        } else {

            if($banner) {

                if(isset($this->attributes['banner'])) {

                    if($this->attributes['banner'] != '') {

                        File::delete($this->attributes['banner']);

                    }

                }

                $bannerName = sha1(time()).'banner.'.$banner->getClientOriginalExtension(); 

                $directory = 'uploads/category/images'; 

                if(!File::exists($directory)) {
                    File::makeDirectory($directory, 0775, true);
                }

                $path = $directory.'/'.$bannerName;

                $banner->move($directory, $bannerName);

                $this->attributes['banner'] = $path;

            }

        }    
    }

    public static function slugify($name) {
        $slug = preg_replace('/ /', '-', $name); 
        $slug = strtolower($slug);
        return $slug;
    }

}

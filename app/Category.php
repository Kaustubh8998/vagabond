<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class Category extends Model
{
    /**
     * The database table used by the model.
     */

    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'thumbnail', 'banner', 'icon', 'tiny_description', 'description', 'slug', 'hide', 'meta_title', 'meta_description', 'meta_keywords', 'media_title', 'insta'
    ];

    public function items() {
        return $this->hasMany('App\Item', 'category_id');
    }

    public function images() {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function testimonials() {
        return $this->morphMany('App\Testimonial', 'testimonialable');
    }

    public function artists() {
        return $this->morphMany('App\Artist', 'artistable');
    }

    public function setThumbnailAttribute($thumbnail) {

        if(gettype($thumbnail) === 'string') {

            $this->attributes['thumbnail'] = $thumbnail;

        } else { 

            if($thumbnail) {

                if(isset($this->attributes['thumbnail'])) {

                    if($this->attributes['thumbnail'] != '') {

                        File::delete($this->attributes['thumbnail']);

                    }

                } 

                $thumbnailName = sha1(time()).'thumb.'.$thumbnail->getClientOriginalExtension(); 

                $directory = 'uploads/category/images'; 

                if(!File::exists($directory)) {
                    File::makeDirectory($directory, 0775, true);
                }

                $path = $directory.'/'.$thumbnailName;

                $thumbnail->move($directory, $thumbnailName);

                $this->attributes['thumbnail'] = $path;

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

    public function setIconAttribute($icon) {

        if(gettype($icon) === 'string') {

            $this->attributes['icon'] = $icon;

        } else { 

            if($icon) {

                if(isset($this->attributes['icon'])) {

                    if($this->attributes['icon'] != '') {

                        File::delete($this->attributes['icon']);

                    }

                } 

                $iconName = sha1(time()).'thumb.'.$icon->getClientOriginalExtension(); 

                $directory = 'uploads/category/images'; 

                if(!File::exists($directory)) {
                    File::makeDirectory($directory, 0775, true);
                }

                $path = $directory.'/'.$iconName;

                $icon->move($directory, $iconName);

                $this->attributes['icon'] = $path;

            }

        }    
    }

    public static function slugify($name) {
        $slug = preg_replace('/ /', '-', $name); 
        $slug = strtolower($slug);
        return $slug;
    }

}

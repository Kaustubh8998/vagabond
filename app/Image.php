<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class Image extends Model
{
    /**
     * The database table used by the model.
     */

    protected $table = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imageable_id', 'imageable_type', 'image'
    ];

    public function imageable() {

        return $this->morphTo();

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

}

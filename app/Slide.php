<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class Slide extends Model
{
    /**
     * The database table used by the model.
     */

    protected $table = 'slides';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'link', 'logo', 'text', 'description'
    ];

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

    public function setLogoAttribute($logo) {

        if(gettype($logo) === 'string') {

            $this->attributes['logo'] = $logo;

        } else {

            if($logo) {

                if(isset($this->attributes['logo'])) {

                    if($this->attributes['logo'] != '') {

                        File::delete($this->attributes['logo']);

                    }

                }

                $logoName = sha1(time()).'logo.'.$logo->getClientOriginalExtension(); 

                $directory = 'uploads/category/images'; 

                if(!File::exists($directory)) {
                    File::makeDirectory($directory, 0775, true);
                }

                $path = $directory.'/'.$logoName;

                $logo->move($directory, $logoName);

                $this->attributes['logo'] = $path;

            }

        }    
    }

}

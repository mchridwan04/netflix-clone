<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BannerHome extends Model
{
    use HasFactory;


    // Show data from table database
    protected $fillable = ['title', 'image', 'description'];

    function image($real_size = false)
    {
        $thumbnail = $real_size ? '' : 'small_';

        if ($this->image && file_exists(public_path('images/banner/' . $thumbnail . $this->image)))
            return asset('images/banner/' . $thumbnail  . $this->image);
        else
            return asset('images/no_image.png');
    }

    function delete_image()
    {
        if ($this->image && file_exists(public_path('images/banner/' . $this->image)))
            unlink(public_path('images/banner/' . $this->image));
        if ($this->image && file_exists(public_path('images/banner/small_' . $this->image)))
            unlink(public_path('images/banner/small_' . $this->image));
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'description'];

    function image($real_size = false)
    {
        $thumbnail = $real_size ? '' : 'small_';

        if ($this->image && file_exists(public_path('images/action/' . $thumbnail . $this->image)))
            return asset('images/action/' . $thumbnail  . $this->image);
        else
            return asset('images/no_image.png');
    }

    function delete_image()
    {
        if ($this->image && file_exists(public_path('images/action/' . $this->image)))
            unlink(public_path('images/action/' . $this->image));
        if ($this->image && file_exists(public_path('images/action/small_' . $this->image)))
            unlink(public_path('images/action/small_' . $this->image));
    }
}

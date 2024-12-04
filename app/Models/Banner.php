<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_picture',
    ];

    public function deleteImage(){
        if ($this->banner_picture && file_exists(public_path('images/banner_picture/' . $this->banner_picture))) {
            return unlink(public_path('images/banner_picture/' . $this->banner_picture));
        }
    }
}

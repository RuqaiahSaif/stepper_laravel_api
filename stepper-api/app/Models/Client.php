<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone_number', 'gender', 'national_id_number', 'package', 'store_type', 'image', 'bank_name', 'iban'];
    const TYPES = ['package1', 'package2', 'package3'];
    const store_type = ['Mobile_car_wash', 'gas_water_delivery', 'home_maintenance', 'mobile_barbe'];

    public function setImageAttribute($image)
    {
        if (gettype($image) != 'string') {
            $i = $image->store('images/clients', 'public');
            $this->attributes['image'] = $image->hashName();
        } else {
            $this->attributes['image'] = $image;
        }
    }

    public function getImageAttribute($image)
    {
        if ($image == null) {
            return '';
        } else {
            return asset('storage/images/profiles') . '/' . $image;
        }
    }

}

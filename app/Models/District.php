<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    // İlişkiyi şu şekilde belirtiyoruz:
    // "city_plate" sütununu kullanarak "City" modelindeki "id" ile eşleş
    public function city()
    {
        return $this->belongsTo(City::class, 'city_plate', 'id');
    }
}
<?php

namespace App\Models;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
            'last_name',
            'middle_name',
            'address',
            'country_id',
            'state_id',
            'city_id',
            'department_id',
            'birthdate',
            'date_hired',
            'zip_code',
    ];

    protected $casts = [
    'birthdate' => 'datetime:Y-m-d',

    'date_hired' => 'datetime:Y-m-d',
];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }


}


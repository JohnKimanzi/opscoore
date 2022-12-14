<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public  function  employeeLanguage():HasMany{
        return $this->hasMany(EmployeeLanguage::class);
    }

     #using m-m relationships 
     public  function employees(){
        return $this->belongsToMany(Employee::class, 'employee_languages')->withTimestamps();
    }


}

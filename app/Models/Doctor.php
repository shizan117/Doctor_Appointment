<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['department_id', 'name', 'phone', 'fee'];


    public static $doctor;
    public static function saveInfo($request,$id=null){
        if ($id != null)
        {
            self::$doctor = Doctor::find($id);
        }
        else
            self::$doctor= new Doctor();

        self::$doctor->department_id =$request->department_id;
        self::$doctor->name =$request->name;
        self::$doctor->phone =$request->phone;
        self::$doctor->fee =$request->fee;

        self::$doctor->save();
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }



}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Company extends Model
{
    
	public $table = "companies";
    

	public $fillable = [
	    "code",
		"name",
		"active"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "code" => "string",
		"name" => "string",
		"active" => "boolean"
    ];

	public static $rules = [
	    "name" => "required"
	];

}

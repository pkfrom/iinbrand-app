<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql2';

    protected $table = 'people';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'age', 'message'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate()
 * @property mixed $value
 */
class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';


}

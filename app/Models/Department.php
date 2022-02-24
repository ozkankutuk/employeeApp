<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;

    public $table = 'departments';
    protected $fillable = [ 'dept_no', 'dept_name' ];


    public function currentEmployees(): BelongsToMany
    {
        return $this->belongsToMany( Employee::class,
            'dept_emp',
            'dept_no',
            'emp_no',
            'dept_no',
            'emp_no' )
            ->where( 'to_date', '!=', '9999-01-01' );
    }
}

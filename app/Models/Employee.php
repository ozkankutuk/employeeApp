<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static paginate()
 * @property mixed $value
 */
class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    public function salaries(): HasMany
    {
        return $this->hasMany( Salary::class,
            'emp_no',
            'emp_no' );
    }

    public function departments(): BelongsToMany
    {
        return $this->belongsToMany( Department::class,
            'dept_emp',
            'emp_no',
            'dept_no',
            'emp_no',
            'dept_no', );
    }

    public function departmentManagements(): BelongsToMany
    {
        return $this->belongsToMany( Department::class,
            'dept_manager',
            'emp_no',
            'dept_no',
            'emp_no',
            'dept_no', );
    }

    public function currentDepartmentManagement(): BelongsToMany
    {
        return $this->belongsToMany( Department::class,
            'dept_manager',
            'emp_no',
            'dept_no',
            'emp_no',
            'dept_no', )
            ->where( 'to_date', '!=', '9999-01-01' );
    }

    public function current_department(): BelongsToMany
    {
        return $this->belongsToMany( Department::class,
            'dept_emp',
            'emp_no',
            'dept_no',
            'emp_no',
            'dept_no', )
            ->where( 'to_date', '!=', '9999-01-01' );
    }




}


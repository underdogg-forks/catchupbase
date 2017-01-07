<?php
/**
 * Model generated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $table = 'projects';

    protected $hidden = [

    ];

    protected $guarded = [];

    protected $dates = ['deleted_at'];

    /**
     * Get the Employee assigned to this Project
     */
    public function assigned_to_emp()
    {
        return $this->belongsTo('App\Models\Employee', 'assigned_to', 'id');
    }

    /**
     * Get the Relation belongs to this Project
     */
    public function relation_info()
    {
        return $this->belongsTo('App\Models\Relation', 'relation_id', 'id');
    }
}

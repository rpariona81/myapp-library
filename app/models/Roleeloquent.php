<?php

use Db\BaseModel;

class RoleEloquent extends BaseModel{
    
    protected $table = 't_roles';
    //protected $dateFormat = 'Ymd H:i:s';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rolename',
        'slug',
        'description',
        'level',
        'guard_name'
    ];


}

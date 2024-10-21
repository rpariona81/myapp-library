<?php
 
namespace Db;
 
use Db\BaseModel;
 
class Test extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 't_entidades';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'region_id',
        'codentidad',
        'entidad',
        'titulo_entidad',
        'codtipoentidad',
        'codgestionentidad',
        'estado',
        'flag_visible'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [

    ];
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        
    ];
    
}
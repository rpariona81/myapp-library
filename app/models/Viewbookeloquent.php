<?php

use Db\BaseModel;
//use \Illuminate\Database\Query\Builder as DB;

//use \Illuminate\Support\Facades\DB;
use \Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Support\Carbon;

//use  \Illuminate\Database\Eloquent\Builder as DB;
//use Illuminate\Support\Facades\DB as FacadesDB;

//use Illuminate\Database\Eloquent\Model as Eloquent;

class ViewBookEloquent extends BaseModel
{

    protected $table = 't_ebooks_views';
    //protected $dateFormat = 'Ymd H:i:s';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ebook_id',
        'user_id',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean',
        'updated_at' => 'datetime:Y-m-d'
    ];

    public function getFlagAttribute()
    {
        //return date_diff(date_create($this->date_vigency), date_create('now'))->d;
        //https://blog.devgenius.io/how-to-find-the-number-of-days-between-two-dates-in-php-1404748b1e84
        //return date_diff(date_create('now'),date_create($this->date_vigency))->format('%R%a days');return date_diff(date_create('now'),date_create($this->date_vigency))->format('%R%a days');
        if ($this->status) {
            return 'Disponible';
        } else {
            return 'No disponible';
        }
    }

    /*public static function addViewEbook($ebook = NULL)
    {
        try {
            if (!is_null($ebook)) {
                $data = ViewBookEloquent::create([
                    'ebook_id' => $ebook->id,
                    'user_id' => $this->session->userdata('user_id')
                ]);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }*/
}
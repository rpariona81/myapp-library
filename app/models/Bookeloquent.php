<?php

use Db\BaseModel;
//use \Illuminate\Database\Query\Builder as DB;

//use \Illuminate\Support\Facades\DB;
use \Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Support\Carbon;

//use  \Illuminate\Database\Eloquent\Builder as DB;
//use Illuminate\Support\Facades\DB as FacadesDB;

//use Illuminate\Database\Eloquent\Model as Eloquent;

class BookEloquent extends BaseModel
{

    protected $table = 't_ebooks';
    //protected $dateFormat = 'Ymd H:i:s';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ebook_code',
        'ebook_isbn',
        'ebook_title',
        'ebook_alias',
        'ebook_display',
        'ebook_type',
        'ebook_author',
        'ebook_editorial',
        'ebook_year',
        'ebook_pages',
        'ebook_front_page',
        'ebook_details',
        'ebook_url',
        'ebook_file',
        'catalog_id',
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
            return 'Activa';
        } else {
            return 'Inactiva';
        }
    }

    public static function selectEbook($id = NULL)
    {
        return BookEloquent::leftjoin('t_catalogs', 't_ebooks.catalog_id', '=', 't_catalogs.id')
            ->select(
                't_ebooks.id',
                't_ebooks.ebook_code',
                't_ebooks.ebook_isbn',
                't_ebooks.ebook_title',
                't_ebooks.ebook_alias',
                't_ebooks.ebook_display',
                't_ebooks.ebook_type',
                't_ebooks.ebook_author',
                't_ebooks.ebook_editorial',
                't_ebooks.status',
                't_ebooks.ebook_year',
                't_ebooks.ebook_pages',
                't_ebooks.ebook_front_page',
                't_ebooks.ebook_details',
                't_ebooks.ebook_url',
                't_ebooks.ebook_file',
                't_ebooks.created_at',
                't_catalogs.catalog_name',
                't_catalogs.catalog_display'
            )
            ->where('t_ebooks.id', $id)
            ->first();
    }

    public static function getCantEbooks()
    {
        return BookEloquent::where('status', 1)->count();
        //return BookEloquent::where('status',1)->whereDate('t_ebooks.date_vigency', '>=', Carbon::now())->count();
    }

    public static function getEbooksByCareer($carrera_id = NULL)
    {

        return FALSE;
    }

    public static function getEbooksLast()
    {

        return BookEloquent::leftjoin('t_catalogs', 't_catalogs.id', '=', 't_ebooks.catalog_id')->where('t_ebooks.status', '=', 1)->whereDate('t_ebooks.created_at', '>=', Carbon::now())->take(3)->orderBy('t_ebooks.created_at', 'desc')->get(['t_ebooks.*', 't_catalogs.catalog_name']);
    }

    public static function getEbooksPaginate($skip = NULL, $take = NULL)
    {
        $data = BookEloquent::leftjoin('t_catalogs', 't_ebooks.catalog_id', '=', 't_catalogs.id')
            ->select(
                't_ebooks.id',
                't_ebooks.ebook_code',
                't_ebooks.ebook_isbn',
                't_ebooks.ebook_title',
                't_ebooks.ebook_alias',
                't_ebooks.ebook_display',
                't_ebooks.ebook_type',
                't_ebooks.ebook_author',
                't_ebooks.ebook_editorial',
                't_ebooks.status',
                't_ebooks.ebook_year',
                't_ebooks.ebook_pages',
                't_ebooks.ebook_front_page',
                't_ebooks.ebook_details',
                't_ebooks.ebook_url',
                't_ebooks.ebook_file',
                't_ebooks.created_at',
                't_catalogs.catalog_name',
                't_catalogs.catalog_display'
            )
            ->skip($skip)->take($take)
            ->get();

        return $data;
    }
}

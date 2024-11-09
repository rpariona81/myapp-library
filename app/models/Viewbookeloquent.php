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

    protected $hidden = ['password'];

    protected $casts = [
        'status' => 'boolean',
        'updated_at' => 'datetime:Y-m-d',
        'lastView' => 'datetime:Y-m-d'
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

    public static function lastViews()
    {
        return ViewBookEloquent::leftjoin('t_ebooks', 't_ebooks.id', '=', 't_ebooks_views.ebook_id')
            ->leftjoin('t_catalogs', 't_ebooks.catalog_id', '=', 't_catalogs.id')
            ->distinct('t_ebooks.id')
            ->where('t_ebooks.status', '=', 1)
            ->take(4)->orderBy('t_ebooks_views.created_at', 'desc')
            ->get([
                't_ebooks.*',
                't_catalogs.catalog_name',
                't_catalogs.catalog_display'
            ]);
    }

    public static function getNumberViewsByBook($catalog_id = NULL)
    {

        $cantReaders = DB::table('t_ebooks_views')
            ->selectRaw('count(distinct(user_id)) as cantReaders, max(created_at) as lastView, ebook_id')
            ->groupBy('ebook_id');

        if ($catalog_id != NULL) {
            $data = ViewBookEloquent::leftjoin('t_ebooks', 't_ebooks.id', '=', 't_ebooks_views.ebook_id')
                ->leftjoin('t_catalogs', 't_ebooks.catalog_id', '=', 't_catalogs.id')
                ->leftjoinSub($cantReaders, 'cantReaders', function ($join) {
                    $join->on('t_ebooks.id', '=', 'cantReaders.ebook_id');
                })
                ->distinct('t_ebooks.id')
                ->where('t_catalogs.id', '=', $catalog_id)
                ->orderBy('cantReaders.lastView', 'desc')
                ->get(['t_ebooks.*', 't_catalogs.catalog_display', 'cantReaders.cantReaders', 'cantReaders.lastView']);
        } else {
            $data = ViewBookEloquent::leftjoin('t_ebooks', 't_ebooks.id', '=', 't_ebooks_views.ebook_id')
                ->leftjoin('t_catalogs', 't_ebooks.catalog_id', '=', 't_catalogs.id')
                ->leftjoinSub($cantReaders, 'cantReaders', function ($join) {
                    $join->on('t_ebooks.id', '=', 'cantReaders.ebook_id');
                })
                ->distinct('t_ebooks.id')
                ->orderBy('cantReaders.lastView', 'desc')
                ->get(['t_ebooks.*', 't_catalogs.catalog_display', 'cantReaders.cantReaders', 'cantReaders.lastView']);
        }

        return $data;
    }

    public static function getListReadersByBook($ebook_id = NULL)
    {
        /*
        select *
        from t_users left join t_careers on t_users.career_id=t_careers.id 
        where t_users.id in 
        (select DISTINCT t_ebooks_views.user_id from t_ebooks_views left join t_users on t_ebooks_views.user_id=t_users.id where ebook_id=5);
        */

        /*$data = DB::select('select *
        from t_users left join t_careers on t_users.career_id=t_careers.id 
        where t_users.id in 
        (select DISTINCT t_ebooks_views.user_id from t_ebooks_views where ebook_id=' . $ebook_id . ')');
        return json_encode($data);*/

        /*$listReaders = DB::table('t_ebooks_views')
            ->selectRaw('distinct(user_id) as user_id')
            ->where('ebook_id', '=', $ebook_id);
        */
        //return $listReaders;


        if ($ebook_id != NULL) {
            $data = ViewBookEloquent::leftjoin('t_users', 't_users.id', '=', 't_ebooks_views.user_id')
                ->leftjoin('t_careers', 't_users.career_id', '=', 't_careers.id')
                ->leftjoin('t_ebooks', 't_ebooks.id', '=', 't_ebooks_views.ebook_id')
                ->distinct('t_users.id')
                ->where('t_ebooks_views.ebook_id', '=', $ebook_id)
                ->get(['t_users.*', 't_careers.career_title','t_ebooks.ebook_display']);
        }
        return $data;
    }
    /*
        try {
            $data = [];
            if ($ebook_id != NULL) {
                $data = ViewBookEloquent::leftjoin('t_users', 't_users.id', '=', 't_ebooks_views.user_id')
                    ->leftjoin('t_careers', 't_users.career_id', '=', 't_careers.id')
                    ->distinct('t_users.id')
                    //->max('t_ebooks_views.created_at')
                    ->where('t_ebooks_views.ebook_id', '=', $ebook_id)
                    ->get(['t_users.*', 't_careers.career_title', 't_ebooks_views.created_at']);
            }
            //return $data;
            print_r($data);
            exit();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        //return $data;
        */
}

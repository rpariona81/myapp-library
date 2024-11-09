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
                ->orderBy('t_ebooks_views.updated_at', 'desc')
                ->get(['t_ebooks.*', 't_catalogs.catalog_display', 'cantReaders.cantReaders']);
        } else {
            $data = ViewBookEloquent::leftjoin('t_ebooks', 't_ebooks.id', '=', 't_ebooks_views.ebook_id')
                ->leftjoin('t_catalogs', 't_ebooks.catalog_id', '=', 't_catalogs.id')
                ->leftjoinSub($cantReaders, 'cantReaders', function ($join) {
                    $join->on('t_ebooks.id', '=', 'cantReaders.ebook_id');
                })
                ->distinct('t_ebooks.id')
                ->orderBy('t_ebooks_views.updated_at', 'desc')
                ->get(['t_ebooks.*', 't_catalogs.catalog_display', 'cantReaders.cantReaders','cantReaders.lastView']);
        }

        return $data;
    }
}

<?php

namespace App;
use \Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;
class Post extends Model
{
    //
    protected $fillable = ['title','body','published_at'];
    //protected $guarded = ['id','created_at','updated_at'];
    protected $dates = ['published_at'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('published', function(Builder $builder){
            $builder->where('published_at','<', Carbon::now()->format('Y-m-d H:i:s'));
        });
    }

    /*
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
    */

    public function scopeOfType($query, $type)
    {
        return $query->where('type',$type);
    }


}

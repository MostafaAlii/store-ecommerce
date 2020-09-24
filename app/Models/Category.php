<?php
namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    const ACTIVE = 0;
    const NOT_ACTIVE = 1;
    //const STATUS = $this->is_active;
    use Translatable;
    protected $with = ['translations'];
    protected $translatedAttributes = ['name'];
    protected $fillable = ['parent_id', 'slug', 'is_active'];
    protected $hidden = ['translations'];
    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeParent($query)
    {
        return $query->whereNull('parent_id');
    }
    public  function getStatus(){
       echo ($this->is_active == 0) ?  '<button class="btn btn-outline-danger">'.trans('admin.not_active').'</button>' : '<button class="btn btn-outline-success">'.trans('admin.active').'</button>';
    }  
}
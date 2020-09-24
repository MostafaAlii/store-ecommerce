<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class CategoryTranslation extends Model
{
    protected $fillable = ['name'];
    public $timestamps  =   false;
}

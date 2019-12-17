<?php
    /**
     * Created by PhpStorm.
     * User: Emara/Muhammad Emara
     * Date: 2019-12-17
     * Time: 10:05
     * Class Category
     * * @package App\Http\Controllers
     * */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $fillable = [
        'name',
        'description',
        'url',
    ];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Category;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    protected $fillable = [ 
        'course_id',
     ]; 
    

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');;
    }
}

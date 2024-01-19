<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModulesData extends Model
{
    protected $table = 'modules_data';

    protected $fillable = ['title', 'description', 'category', 'sub_category', 'module_id', 'meta_title', 'meta_keywords', 'meta_description', 'image', 'images'];

    public function results()
    {
        return $this->hasMany('App\Models\ModulesData','category');
    }

    public function count()
    {
        return $this->results()->count();
    }

}

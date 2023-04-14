<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The primary key associated with the table.
     *
     * @var integer
     */
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'active', 'code', 'created_at', 'parentId'];


    public function banners() : BelongsToMany {
        return $this->belongsToMany(Banner::class, 'banners_categories', 'bannerId', 'categoryId');
    }
}

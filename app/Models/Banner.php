<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Banner extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var integer
     */
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'active', 'active_from', 'active_to', 'link', 'image_banner'];

    public $timestamps = false;

    public function categories() : BelongsToMany {
        return $this->belongsToMany(Category::class, 'banners_categories', 'categoryId', 'bannerId');
    }

}

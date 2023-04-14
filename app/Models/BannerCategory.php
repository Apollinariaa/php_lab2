<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BannerCategory extends Model
{
    use HasFactory;

    protected $table = 'banners_categories';

    /**
     * The primary key associated with the table.
     *
     * @var integer
     */
    protected $primaryKey = 'id';

    protected $fillable = ['categoryId', 'bannerId'];

    public $timestamps = false;
}

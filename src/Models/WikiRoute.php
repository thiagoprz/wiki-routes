<?php

namespace Thiagoprz\WikiRoutes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class WikiRoute
 * @package Thiagoprz\WikiRoutes\Models
 */
class WikiRoute extends Model
{
    use SoftDeletes;

    /**
     * Table definition
     *
     * @var string
     */
    protected $table = 'wiki_routes';

    /**
     * @var array
     */
    protected $fillable = ['route', 'link'];
}

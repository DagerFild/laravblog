<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static join(string $table, string $column, string $param, string $column2)
 * @method static find(int $id) //Search id in table
 */
class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'post_id';
}

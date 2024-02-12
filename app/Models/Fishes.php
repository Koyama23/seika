<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fishes extends Model
{
    use SoftDeletes;

     protected $fillable = [
    'name',
    'season',
    'price',
    'eat',
    'habitat',
    'image',
];

public function getByLimit()
{
    // updated_atで降順に並べる
    return $this->orderBy('updated_at', 'DESC')->get();
}

// public function getPaginateByLimit(int $limit_count=100000000000000000)
// {
//     // updated_atで降順に並べたあと、limitで件数制限をかける
//     return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
// }

}



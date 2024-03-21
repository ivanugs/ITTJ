<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class PlantaFamilia
 *
 * @property $id
 * @property $scientific_name
 * @property $common_name
 * @property $family
 * @property $image
 * @property $description
 * @property $publication_date
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */


class PlantaFamilia extends Model
{
    static $rules = [
		'scientific_name' => 'required|string',
		'common_name' => 'required|string',
		'family' => 'required|string',
		'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
		'description' => 'required|string',
    'type' => 'required|string',
		'publication_date' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['scientific_name','common_name','family','image','description','type','publication_date'];

    use HasFactory;
}
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
		'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
		'publication_date' => 'required|date'
    ];

    public function getFamilyNameAttribute()
    {
        // Verifica si hay una relación válida con el ID de la familia
        $familia = PlantaFamilia::find($this->family);
        
        // Si la relación existe, devuelve el nombre de la familia, de lo contrario, devuelve un valor predeterminado o null
        return $familia ? $familia->scientific_name : 'Nombre de familia no encontrado';
    }

    protected $perPage = 20;
    
    protected $fillable = ['scientific_name','common_name','family','image','description','type','publication_date'];

    use HasFactory;
}
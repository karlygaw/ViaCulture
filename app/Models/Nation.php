<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Nation extends Model
{
    protected $table = 'nations';

    protected $fillable = [
        'name',
        'cover_image',
        'main_image',
        'bg_image',
        'icon_image',
        'title',
        'introduction',
        'history_text_1',
        'history_image_1_1',
        'history_description_1_1',
        'history_image_1_2',
        'history_description_1_2',
        'history_text_2',
        'history_image_2_1',
        'history_description_2_1',
        'history_image_2_2',
        'history_description_2_2',
        'history_text_3',
        'history_image_3_1',
        'history_description_3_1',
        'history_image_3_2',
        'history_description_3_2',
        'history_text_4',
        'history_image_4_1',
        'history_description_4_1',
        'history_image_4_2',
        'history_description_4_2',
        'distribution_image',
        'traditional_clothing_image',
        'traditional_clothing_description',
        'music_and_culture_description',
        'video_link'
    ];

    public static function validate(array $data)
    {
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'cover_image' => 'required|string|max:255',
            'main_image' => 'required|string|max:255',  
            'bg_image' => 'required|string|max:255',    
            'icon_image' => 'required|string|max:255', 
            'title' => 'required|string|max:255',
            'introduction' => 'required|string',
            'history_text_1' => 'required|string',
            'history_image_1_1' => 'required|string|max:255',
            'history_description_1_1' => 'required|string',
            'history_image_1_2' => 'required|string|max:255', 
            'history_description_1_2' => 'required|string',
            'history_text_2' => 'required|string',
            'history_image_2_1' => 'required|string|max:255', 
            'history_description_2_1' => 'required|string',
            'history_image_2_2' => 'required|string|max:255',
            'history_description_2_2' => 'required|string',
            'history_text_3' => 'required|string',
            'history_image_3_1' => 'required|string|max:255', 
            'history_description_3_1' => 'required|string',
            'history_image_3_2' => 'required|string|max:255',  
            'history_description_3_2' => 'required|string',
            'history_text_4' => 'required|string',
            'history_image_4_1' => 'required|string|max:255', 
            'history_description_4_1' => 'required|string',
            'history_image_4_2' => 'required|string|max:255', 
            'history_description_4_2' => 'required|string',
            'distribution_image' => 'required|string|max:255', 
            'traditional_clothing_image' => 'required|string|max:255',  
            'traditional_clothing_description' => 'required|string',
            'music_and_culture_description' => 'required|string',
            'video_link' => 'nullable|url',
        ]);

        return $validator;
    }

    public function setCoverImageAttribute($value)
    {
        $this->attributes['cover_image'] = $value;
    }

    public function getCoverImageAttribute($value)
    {
        return $value;
    }
}

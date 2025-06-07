<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_image',
        'mission_title',
        'mission_text',
        'mission_image',
        'features',
        'history_items',
        'production_title',
        'production_text',
        'production_image',
        'production_steps',
        'team_title',
        'team_subtitle',
        'team_members',
        'certificates',
        'cta_text',
        'cta_button_text',
        'cta_button_link',
    ];

    protected $casts = [
        'features' => 'array',
        'history_items' => 'array',
        'production_steps' => 'array',
        'team_members' => 'array',
        'certificates' => 'array',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{

    
    use HasFactory;


    protected $fillable = ['title', 'content', 'owner_id'];

    public static $rules = [
        'rapport_title' => 'required|unique:rapports,title',
        'rapport_markdown' => 'nullable|string',
        'owner_id' => 'required|integer',
    ];



}

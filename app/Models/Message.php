<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Agrega los campos que deseas permitir para asignación masiva.
    protected $fillable = ['text','subrayado','negrita'];
}
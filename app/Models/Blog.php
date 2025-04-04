<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Add the following line to allow mass assignment for these fields
    protected $fillable = ['title', 'content', 'writer_name'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // use HasFactory;

    protected $guarded = array('id');

    public function getTitle() {
        return 'ID'.$this->id.':'.$this->title. '著者:'. optional($this->author)->name;
    }
    public function author() {
        return $this->belongsTo('App\Models\Author');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    public $fillable = ['name', 'done'];
    
    public function mark()
    {
        $this->done = $this->done ? false : true;
        $this->save();
    }

}

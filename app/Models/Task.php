<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use softDeletes;
   public $table='task';

   protected $fillable = [
       'description',
   ];
   public function isCompleted(){
       return $this->completed_at !== null;
   }
}

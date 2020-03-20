<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = [
      "nome",
      "eta",
      "azienda",
      "ruolo",
      "descrizione",
      "genere"


  ];
}

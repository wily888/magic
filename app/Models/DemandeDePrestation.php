<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeDePrestation extends Model
{
    use HasFactory;
    protected $table = "demande_prestations";
    protected $guarded = [];


}
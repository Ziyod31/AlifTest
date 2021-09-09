<?php

namespace App\Models;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = ['value', 'contact_id'];

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}

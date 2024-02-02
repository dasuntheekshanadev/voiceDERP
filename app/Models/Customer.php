<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['firstname','lastname','nic','address','phone','email','invoiceditems','status','src1','src2','src3','logo'];
}

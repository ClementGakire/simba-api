<?php

namespace App;
use HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
  
    protected $fillable = [
        'sender',
        'receiver',
        'sourceCurrency',
        'targetCurrency',
        'exchangeRate',
        'amount'
    ];
}

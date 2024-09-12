<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocbs extends Model
{
    use HasFactory;

    protected $table = 'shop_ocbs';

    // Указываем атрибуты, которые можно массово присваивать
    protected $fillable = [
        'vypal',
        'nomerSceta',
        'naimenovanie',
        'firma',
        'debetNaNacloPerioda',
        'kreditNaNacloPerioda',
        'oborotDebet',
        'oborotKredit',
        'debetNaKonecPerioda',
        'kreditNaKonecPerioda',
        'dviz',
        'foto',
        'zateya'
    ];

    // Если вам нужно отключить временные метки
    public $timestamps = false;
}

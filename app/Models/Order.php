<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public $timestamps = true;
    protected $fillable = [
        'orderID',
        'orderProductName',
        'orderQuantity',
        'orderTotal',
        'orderFirstName',
        'orderSecondName',
        'orderAddress',
        'orderCity',
        'orderState',
        'orderZip',
        'orderEmail',
        'orderPhoneNumber',
        'orderStatus',
        'isDelete',
        'CreatedBy',
        'ModifiedBy',
        'CreatedBy',
        'created_at'
    ];
}

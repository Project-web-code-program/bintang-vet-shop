<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailItemPatient extends Model
{
    protected $table = "detail_item_patients";

    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];

    protected $fillable = ['check_up_result_id', 'price_item_id', 'quantity',
        'price_overall', 'status_paid_off', 'user_id', 'medicine_group_id'];
}

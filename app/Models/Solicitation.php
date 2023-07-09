<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Solicitation extends Model
{
    use HasFactory,HasUuids;

    public $timestamps = true;
    protected $primaryKey = "uuid";
    protected $keyType = "string";

    protected $fillable = ["description", "requested_balance", 
    "rate", "deadline", "status", "date","user_id", "wallet_id"];

    public function wallet() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}

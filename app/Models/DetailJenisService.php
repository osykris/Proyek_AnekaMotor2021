<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailJenisService extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function jenisService()
    {
        return $this->belongsTo(JenisService::class, 'jenisService_id', 'id');
    }
}

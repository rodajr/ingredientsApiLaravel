<?php

namespace App\Models\UnitTypes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class UnitTypesModel extends Model
{
    use HasFactory;

    public function unitable(): MorphTo
    {
        return $this->morphTo();
    }
}

<?php

namespace App\Models\Ingredients;

use App\Models\UnitTypes\UnitTypesModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class IngredientsModel extends Model
{
    use HasFactory;

    public function unitId():MorphOne
    {
        return $this->morphOne(UnitTypesModel::class,'unitable','unit_type_id');
    }
}

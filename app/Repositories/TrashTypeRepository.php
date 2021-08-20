<?php

namespace App\Repositories;

use App\Models\TrashType;

class TrashTypeRepository
{
    public function getAllTrashTypesPaginate($perPage = 10) {
        return TrashType::paginate($perPage);
    }
}

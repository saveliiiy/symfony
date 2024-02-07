<?php

namespace App\User\Factory;

use App\User\DTO\HumanDTO;
use App\User\Request\GetListRequest;

class CreateUserFactory
{
    public function fromGetListRequest(GetListRequest $request): HumanDTO
    {
        return new HumanDTO(
            $request->name,
            $request->weight,
            $request->age,
            $request->height
        );
    }
}
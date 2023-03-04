<?php

namespace App\Containers\AppSection\Authorization\Actions;

use App\Containers\AppSection\Authorization\UI\API\Requests\GetUserPermissionsRequest;
use App\Containers\AppSection\User\Tasks\FindUserByIdTask;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class GetUserPermissionsAction extends ParentAction
{
    /**
     * @param GetUserPermissionsRequest $request
     * @return mixed
     * @throws NotFoundException
     */
    public function run(GetUserPermissionsRequest $request): mixed
    {
        $user = app(FindUserByIdTask::class)->run($request->id);

        return $user->permissions;
    }
}

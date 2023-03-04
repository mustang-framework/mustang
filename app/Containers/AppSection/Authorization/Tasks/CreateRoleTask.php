<?php

namespace App\Containers\AppSection\Authorization\Tasks;

use App\Containers\AppSection\Authorization\Data\Repositories\RoleRepository;
use App\Containers\AppSection\Authorization\Models\Role;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateRoleTask extends ParentTask
{
    public function __construct(
        protected RoleRepository $repository
    ) {
    }

    /**
     * @param string $name
     * @param string|null $description
     * @param string|null $displayName
     * @param string $guardName
     * @return Role
     * @throws CreateResourceFailedException
     */
    public function run(string $name, string $description = null, string $displayName = null, string $guardName = 'api'): Role
    {
        try {
            $role = $this->repository->create([
                'name' => strtolower($name),
                'description' => $description,
                'display_name' => $displayName,
                'guard_name' => $guardName,
            ]);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }

        return $role;
    }
}

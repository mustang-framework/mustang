<?php

namespace App\Containers\AppSection\Authorization\Data\Seeders;

use App\Containers\AppSection\Authorization\Tasks\GetAllPermissionsTask;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class AuthorizationGivePermissionsToRolesSeeder_3 extends ParentSeeder
{
    public function run(): void
    {
        // Give all permissions to 'admin' role on all Guards ----------------------------------------------------------------
        $adminRoleName = config('appSection-authorization.admin_role');
        $roleModel = config('permission.models.role');
        foreach (array_keys(config('auth.guards')) as $guardName) {
            $allPermissions = app(GetAllPermissionsTask::class)->whereGuard($guardName)->run(true);
            $adminRole = $roleModel::findByName($adminRoleName, $guardName);
            $adminRole->givePermissionTo($allPermissions);
        }

        // Give permissions to roles ----------------------------------------------------------------
        //
    }
}

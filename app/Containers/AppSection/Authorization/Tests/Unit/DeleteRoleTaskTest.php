<?php

namespace App\Containers\AppSection\Authorization\Tests\Unit;

use App\Containers\AppSection\Authorization\Models\Role;
use App\Containers\AppSection\Authorization\Tasks\DeleteRoleTask;
use App\Containers\AppSection\Authorization\Tests\TestCase;
use App\Ship\Exceptions\NotFoundException;

/**
 * Class DeleteRoleTaskTest.
 *
 * @group authorization
 * @group unit
 */
class DeleteRoleTaskTest extends TestCase
{
    public function testSuccessfulDeleteRole_ShouldReturn1(): void
    {
        $role = Role::factory()->create(['name' => 'testRole']);

        $result = app(DeleteRoleTask::class)->run($role->id);

        $this->assertEquals(1, $result);
        $this->assertDatabaseMissing(config('permission.table_names.roles'), $role->toArray());
    }

    public function testDeleteRoleWitInvalidId_Throws404(): void
    {
        $this->expectException(NotFoundException::class);

        $invalidId = 7777;

        app(DeleteRoleTask::class)->run($invalidId);
    }
}

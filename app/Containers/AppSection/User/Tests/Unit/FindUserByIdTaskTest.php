<?php

namespace App\Containers\AppSection\User\Tests\Unit;

use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\Tasks\FindUserByIdTask;
use App\Containers\AppSection\User\Tests\TestCase;
use App\Ship\Exceptions\NotFoundException;

/**
 * Class FindUserByIdTaskTest.
 *
 * @group user
 * @group unit
 */
class FindUserByIdTaskTest extends TestCase
{
    public function testFindUserById(): void
    {
        $user = User::factory()->create();

        $foundUser = app(FindUserByIdTask::class)->run($user->id);

        $this->assertEquals($user->id, $foundUser->id);
    }

    public function testFindUserWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(FindUserByIdTask::class)->run($noneExistingId);
    }
}

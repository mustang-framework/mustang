<?php

namespace App\Containers\AppSection\Authentication\UI\API\Tests\Functional;

use App\Containers\AppSection\Authentication\Tasks\CreatePasswordResetTokenTask;
use App\Containers\AppSection\Authentication\UI\API\Tests\ApiTestCase;
use Illuminate\Testing\Fluent\AssertableJson;

/**
 * Class ResetPasswordTest.
 *
 * @group authentication
 * @group api
 */
class ResetPasswordTest extends ApiTestCase
{
    protected string $endpoint = 'post@v1/password/reset';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testResetPassword(): void
    {
        $this->getTestingUser([
            'email' => 'someone@something.test',
            'password' => 'old pass',
        ]);
        $token = app(CreatePasswordResetTokenTask::class)->run($this->testingUser);
        $data = [
            'email' => $this->testingUser->email,
            'password' => 's3cr3tPa$$',
            'token' => $token,
        ];

        $response = $this->makeCall($data);

        $response->assertStatus(204);
    }

    public function testResetPasswordWithInvalidEmail(): void
    {
        $data = [
            'email' => 'missing-at.test',
        ];

        $response = $this->makeCall($data);

        $response->assertStatus(422);
        $response->assertJson(
            fn(AssertableJson $json) => $json->has('errors')
                ->where('errors.email.0', 'The email must be a valid email address.')
                ->etc()
        );
    }

    public function testResetPasswordWithInvalidPassword(): void
    {
        $data = [
            'password' => '((((()))))',
        ];

        $response = $this->makeCall($data);

        $response->assertStatus(422);
        $response->assertJson(
            fn(AssertableJson $json) => $json->has('errors')
                ->has(
                    'errors.password',
                    fn(AssertableJson $json) => $json
                        ->where('0', 'The password must contain at least one uppercase and one lowercase letter.')
                        ->where('1', 'The password must contain at least one letter.')
                        ->where('2', 'The password must contain at least one number.')
                )
                ->etc()
        );
    }
}

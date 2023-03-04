<?php

namespace App\Containers\AppSection\User\UI\CLI\Commands;

use App\Containers\AppSection\User\Actions\CreateAdminAction;
use App\Ship\Parents\Commands\ConsoleCommand as ParentConsoleCommand;

class CreateAdminCommand extends ParentConsoleCommand
{
    protected $signature = 'mustang:create:admin';

    protected $description = 'Create a new User with the ADMIN role';

    public function handle(): void
    {
        $username = $this->ask('Enter the username for this user');
        $email = $this->ask('Enter the email address of this user');
        $password = $this->secret('Enter the password for this user');
        $password_confirmation = $this->secret('Please confirm the password');

        if ($password !== $password_confirmation) {
            $this->error('Passwords do not match - exiting!');

            return;
        }

        $data = [
            'name' => $username,
            'email' => $email,
            'password' => $password,
        ];

        app(CreateAdminAction::class)->run($data);

        $this->info('Admin ' . $email . ' was successfully created');
    }
}

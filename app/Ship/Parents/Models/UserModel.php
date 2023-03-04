<?php

namespace App\Ship\Parents\Models;

use Mustang\Core\Abstracts\Models\UserModel as AbstractUserModel;
use Mustang\Core\Traits\CanOwnTrait;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

abstract class UserModel extends AbstractUserModel
{
    use Notifiable;
    use HasApiTokens;
    use HasRoles;
    use CanOwnTrait;
}

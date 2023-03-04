<?php

namespace App\Ship\Parents\Models;

use Mustang\Core\Abstracts\Models\Model as AbstractModel;
use Mustang\Core\Traits\CanOwnTrait;

abstract class Model extends AbstractModel
{
    use CanOwnTrait;
}

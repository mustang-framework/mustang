<?php

namespace App\Containers\AppSection\Authorization\Models;

use Mustang\Core\Traits\FactoryLocatorTrait;
use Mustang\Core\Traits\HashIdTrait;
use Mustang\Core\Traits\HasResourceKeyTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HashIdTrait;
    use HasResourceKeyTrait;
    use HasFactory, FactoryLocatorTrait {
        FactoryLocatorTrait::newFactory insteadof HasFactory;
    }

    protected string $guard_name = 'api';

    protected $fillable = [
        'name',
        'guard_name',
        'display_name',
        'description',
    ];
}

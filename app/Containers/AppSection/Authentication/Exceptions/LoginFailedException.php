<?php

namespace App\Containers\AppSection\Authentication\Exceptions;

use App\Ship\Parents\Exceptions\Exception as ParentException;
use Symfony\Component\HttpFoundation\Response;

class LoginFailedException extends ParentException
{
    protected $code = Response::HTTP_UNPROCESSABLE_ENTITY;
    protected $message = 'An Exception happened during the Login Process.';
}

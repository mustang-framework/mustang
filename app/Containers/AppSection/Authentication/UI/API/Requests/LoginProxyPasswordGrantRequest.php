<?php

namespace App\Containers\AppSection\Authentication\UI\API\Requests;

use App\Containers\AppSection\Authentication\Classes\LoginCustomAttribute;
use App\Ship\Parents\Requests\Request as ParentRequest;

class LoginProxyPasswordGrantRequest extends ParentRequest
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [

    ];

    /**
     * Defining the URL parameters (`/stores/999/items`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [

    ];

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules = [
            // we don't need to require email here. The proper login attribute (with proper validations)
            // will be added automatically by "mergeValidationRules" method below
            // 'email' => 'required',
            'password' => 'required',
        ];

        return LoginCustomAttribute::mergeValidationRules($rules);
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}

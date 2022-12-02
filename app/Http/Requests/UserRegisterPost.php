<?php
declare(strict_types=1);
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User as UserModel;

class UserRegisterPostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:128'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:254', 'unique:users'],
            'password' => ['required', 'max:72'],
            
        ];
    }
}
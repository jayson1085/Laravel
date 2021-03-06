<?php namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class UpdateAdminRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'email' => ['required', 'email', 'unique:admin,email,' . $this->route()->parameter('admin')->id],
			'name' => ['required'],
			'password' => ['sometimes', 'min:8'],
		];
	}

	public function messages()
	{
		return [
			'email.required' => 'Veuillez renseigner l\'adresse email.',
			'email.email' => 'Votre adresse email n\'est pas au bon format.',
			'email.unique' => 'L\'adresse email doit être unique.',
			'name.required' => 'Veuillez renseigner le nom.',
			'password.min' => 'Votre mot de passe doit faire plus de 8 caractères.',
		];
	}

}

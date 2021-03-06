<?php namespace App\Http\Requests\AdNetwork;

use App\Http\Requests\Request;
use Auth;

class StoreAdNetworkRequest extends Request {

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
			'email' => ['required', 'email', 'unique:ad_network,email'],
			'referent_email' => ['required', 'email', 'unique:ad_network_user,email'],
			'phone' => ['required'],
			'referent_phone' => ['required'],
			'title' => ['required'],
			'position' => ['required'],
			'name' => ['required'],
			'referent_name' => ['required'],
			'family_name' => ['required'],
			'company_type' => ['required'],
			'corporate_name' => ['required'],
			'address' => ['required'],
			'zipcode' => ['required'],
			'city' => ['required'],
			'supports' => ['required', 'integer'],
			'password' => ['required', 'confirmed', 'min:8', 'max:255'],
			'password_confirmation' => ['required'],
		];
	}

	public function messages()
	{
		return [
			'email.required' => 'Veuillez renseigner l\'adresse email de la régie.',
			'email.email' => 'L\'adresse email de la régie n\'est pas au bon format.',
			'email.unique' => 'L\'adresse email de la régie est déjà utilisée.',
			'referent_email.required' => 'Veuillez renseigner l\'adresse email du référent.',
			'referent_email.email' => 'L\'adresse email du référent n\'est pas au bon format.',
			'referent_email.unique' => 'L\'adresse email du référent est déjà utilisée.',
			'phone.required' => 'Veuillez renseigner le numéro de téléphone de la régie.',
			'referent_phone.required' => 'Veuillez renseigner le numéro de téléphone du référent.',
			'title.required' => 'Veuillez renseigner la civilité du référent.',
			'position.required' => 'Veuillez renseigner la fonction du référent.',
			'name.required' => 'Veuillez renseigner le nom de la régie.',
			'referent_name.required' => 'Veuillez renseigner le nom du référent.',
			'family_name.required' => 'Veuillez renseigner le prénom du référent.',
			'company_type.required' => 'Veuillez renseigner le type de la régie.',
			'corporate_name.required' => 'Veuillez renseigner la raison sociale de la régie.',
			'address.required' => 'Veuillez renseigner l\'adresse de la régie.',
			'zipcode.required' => 'Veuillez renseigner le code postal de la régie.',
			'city.required' => 'Veuillez renseigner la ville de la régie.',
			'supports.required' => 'Veuillez renseigner le nombre de supports de la régie à titre indicatif.',
			'supports.integer' => 'Un entier est attendu pour les supports.',
			'password.required' => 'Veuillez saisir le mot de passe du référent.',
			'password.confirmed' => 'Les mots de passe doivent être identiques.',
			'password.min' => 'Votre mot de passe doit contenir au minimum 8 caractères.',
			'password.max' => 'Votre mot de passe ne peut pas dépasser 255 caractères.',
			'password_confirmation.required' => 'Veuillez saisir la vérification de mot de passe.'
		];
	}

}

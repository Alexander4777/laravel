<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * Base de datos usado por el modelo.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Atributos excluidos del modelo JSON.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Obtener identificador.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Obtener contraseña.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Obtener correo.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}
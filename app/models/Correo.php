<?php

class Correo extends \Eloquent {
	protected $fillable = ['email','nombre','contacto'];
	protected $table = 'correos';
}
<?php

class Documento extends \Eloquent {
	protected $fillable = ['nombre','user_id'];
	protected $table = 'documentos';
}
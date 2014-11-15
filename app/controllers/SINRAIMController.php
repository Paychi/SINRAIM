<?php

class SINRAIMController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default SINRRAIM Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'SINRAIMController');
	|
	*/
	
	protected $layout = 'layouts.home';

	public function getIndex()
	{
		return $this->layout->content = View::make('site.inicio');
	}
	
	public function getNotificar()
	{
			return $this->layout->content = View::make('site.formulariofv');
	}
	
	public function postNotificar()
	{
		$valores = Input::All();
		$validaciones = array
		(
			'expediente' => 'required|min:5',
			'nombre' => 'required|min:5',
			'edad' => 'required|min:5',
			'peso' => 'required|min:5'
		);		
		$mensajes = array
		(
			"required" => "Este campo no puede quedar vacio.",
			"min" => "Debe tener como minimo 5 caracteres"
		);
		
		$validar=Validator::make($valores,$validaciones,$mensajes);
		
		if($validar->fails())
		{
			return Redirect::back() -> withErrors($validar);
		}else
		{
			Session::flash('mensaje','Datos ingresados correctamente');
			return Redirect::to('notificar');
		}
	}
	
	public function getNotificaciones()
	{
			return $this->layout->content = View::make('site.vernotificacion');
	}
	
	public function getAdd()
	{
		return $this->layout->content = View::make('site.add');
	}
}

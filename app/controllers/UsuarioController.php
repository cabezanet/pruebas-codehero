<?php

	class UsuarioController extends BaseController {

		
		public function mostrarUsuarios() {
		
			$usuarios = Usuario::all();

			return View::make('usuarios.lista', array('usuarios' => $usuarios));

		}

		public function nuevoUsuario() {

			return View::make('usuarios.crear');
		}

		public function crearUsuario() {

			Usuario::create(Input::all());

			return Redirect::to('usuarios');
		}

		public function verUsuario($id) {

			$usuario = Usuario::find($id);

			return View::make('usuarios.ver', array('usuario' => $usuario));

		}

		public function eliminarUsuario($id) {

			Usuario::where('id', '=', $id)->delete();

			return Redirect::to('usuarios');	
		}
	}

?>
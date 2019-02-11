<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;


class ProductoController extends Controller
{
	    public function getIndex()
		{
			$arrayProductos = Producto::all();
		    return view('productos.index')
		    			->with('arrayProductos', $arrayProductos);
		}
	    public function getShow($id)
		{
			$producto = Producto::findOrFail($id);
		    return view('productos.show')
		    			->with('producto', $producto)
		    			->with('id', $id);
		}
		public function getCreate()
		{
		    return view('productos.create');
		}
		public function postCreate()
		{
		    return view('productos.create');
		}
		public function getEdit($id)
		{
			$producto = Producto::findOrFail($id);
		    return view('productos.edit')
		    			->with('producto', $producto)
		    			->with('id', $id);
		}

	}
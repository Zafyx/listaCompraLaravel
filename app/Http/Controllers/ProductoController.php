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
		    			->with('producto', $producto);
		}
		public function getCreate()
		{
		    return view('productos.create');
		}
		public function postCreate(Request $request)
		{
			Producto::create([
				'nombre' => $request->nombre,
				'precio' => $request->precio,
				'categoria' => $request->categoria,
				'imagen' => $request->imagen,
				'descripcion' => $request->descripcion
			]);

		    return redirect('/productos');
		}
		public function getEdit($id)
		{
			$producto = Producto::findOrFail($id);
		    return view('productos.edit')
		    			->with('producto', $producto);
		}
		public function putEdit(Request $request, $id)
		{
			$producto = Producto::findOrFail($id);
	        $producto->nombre = $request->nombre;
	        $producto->precio = $request->precio;
	        $producto->categoria = $request->categoria;
	        $producto->imagen = $request->imagen;
	        $producto->descripcion = $request->descripcion;

	        $producto->save();
	        return redirect('/productos/show/' . $producto->id);
		}

		public function putComprar(Request $request, $id)
		{
			$producto = Producto::findOrFail($id);
			if ($producto->pendiente==false) {
				$producto->pendiente =true;
			} else {
				$producto->pendiente = false;
			}
	        $producto->save();
	        return redirect('/productos/show/' . $producto->id);
		}
	}
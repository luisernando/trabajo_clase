<?php

namespace App\Http\Controllers;
use Validator;
use App\Categories;
use App\Products;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{

   public function __construct()
    
    {
        $this->middleware('auth');
    }
    //
    //
    /**
	 * redirect a el form de crear categoria
     * @return [type] [description]
     */
   public function index()
   {
   	return view('catalogo.formCategories', []);
   }
   //
   /**
    * insertar datos en la bdd
    * @param  string $value [description]
    * @return [type]        [description]
    */
   public function createCategory(Request $request)
   {
   	// Creo un objeto de validacion
        $validator = Validator::make($request->all(), [
            'name'        => 'required|max:24|min:6',
            'description' => 'required|min:10',
        ]);
        // Comprubo que la validacion pase
        if ($validator->fails()) {
            // si no pasa redirije al formulario
            return redirect('/home/createCategory')
            //->wihtInput()
            ->withErrors($validator);
        }

          // Guarda la tarea
          // 
        $data              = new Categories();
        $data->name        = $request->name;
        $data->description = $request->description;
        $data->user_id     = \Auth::user()->id;
        $data->save();
            
        return redirect('/home');
   			
   }


   public function indexProducts()
   {
   	  $tasks = Products::orderBy('created_at', 'asc')->get();
        return view('viewProducts', ['tasks' => $tasks]);
   }
   public function indexCreateProducts()
   {
        return view('catalogo.formProducts', []);
   }



   public function createProducts(Request $request)
   {
   		// Creo un objeto de validacion
        $validator = Validator::make($request->all(), [
            'name'        => 'required|max:24|min:6',
            'tax' => 'required|min:1',
            'price'=> 'required|min:3',
            'stock'=> 'required|min:1',
            'categoria'=>'required|min:3',
           

        ]);
        // Comprubo que la validacion pase
        if ($validator->fails()) {
            // si no pasa redirije al formulario
            return redirect('/home/createProducts')
            //->wihtInput()
            ->withErrors($validator);
        }

          // Guarda la tarea
          // 
        $data              = new Products();
        $data->name        = $request->name;
        $data->tax = $request->tax;	
        $data->price=$request->price;
        $data->stock=$request->stock;
        $data->category_id=$request->category_id;
        $data->user_id     = \Auth::user()->id;
        $data->save();
            
        return redirect('/home/createProducts');
   }


   
}

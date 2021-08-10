<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\proyecto;
use App\materiales;
use App\cuenta; //Revisar las que nose usann
use App\bolson;
use App\areagestion;
use App\fuentef;
use App\fuenter;
use App\linea;
use App\bitacora;
use App\requisicion;
use App\deta_requisicion;
use App\bitfotos;
use App\materiales_proy;
use App\cotizacion;
use App\det_cotizacion;
use App\proveedor;
use App\admin_contrato;
use App\venta;

use PDF;




//Definir zona horaria o region.
date_default_timezone_set('America/El_Salvador');
setlocale(LC_ALL,"es_ES");

class VentasController extends Controller
{
   // retornar vista  crear venta
    public function crear_venta(){
        return view('backend.paginas.Nueva_VentaR');
    }

    public function load_ventas(){
        //para cargar los ventas
        $ventas = venta::all();
        return view('backend.paginas.Ventas',compact('ventas'));
     }

    public function add_venta(Request $request){ 
        if($request->isMethod('post')){  
      
           $regla = array( 
               'nombreV' => 'required',           
               'sumaV' => 'required'
           );
  
           $mensaje = array(    
               'nombreV.required' => 'nombre del vendedor es requerido',           
               'sumaV.required' => 'suma de la venta es requerida'
           
               );
  
           $validar = Validator::make($request->all(), $regla, $mensaje );
  
           if ($validar->fails())
           {
               return [
                   'success' => 0, 
                   'message' => $validar->errors()->all()
               ];
           }   

            $idventa = venta::insertGetId([ 
           'correla'=>$request->correla,
           'nombreV'=>$request->nombreV,
           'domiV'=>$request->domiV,
           'depaV'=>$request->depaV,
           'sumaV'=>$request->sumaV,
           'nombreC'=>$request->nombreC,
           'domiC'=>$request->domiC,
           'depaC'=>$request->depaC,
           'elo'=>$request->elo,
           'semo'=>$request->semo,
           'expre'=>$request->expre,
           'conti'=>$request->conti,
           'semo2'=>$request->semo2,
           'herrado'=>$request->herrado,
           'vent'=>$request->vent,
           'fierro'=>$request->fierro,
           'numF'=>$request->numF,
           'depaF'=>$request->depaF,
           'alcal'=>$request->alcal,
           'dia'=>$request->dia,
           'mes'=>$request->mes,
           'ano'=>$request->ano]); 

           if($idventa){     
               $idventa = DB::getPdo()->lastInsertId();
               }
  
           if($idventa){               
               return [
                   'success' => 1,
                   'idventa' => $idventa// si
               ];
          }else{
              return [
                  'success' => 2 // no se
              ];
          }
  
       }
    }

    // Anular venta
    public function anular_venta(Request $request){

        if($request->isMethod('post')){  

            // encontrar venta
            if($orden = DB::table('ventas')->where('id', $request->id)->first()){                        
                
                    DB::table('ventas')->where('id', '=', $request->id)->update(['estado' => '2']);
                    return [
                        'success' => 1 // Venta Anulada
                    ];                      
            }else{
                return [
                    'success' => 3 // Venta no encontrada
                ];
            }
        }
    }

    //pdf de Venta 
    public function pdf_venta(Request $request)
    {
        
        $venta = DB::table('ventas')->where('id',  $request->id)->first();
        $pdf = PDF::loadView('backend.reportes.acta_venta', compact('venta'));
        $pdf->setPaper('letter', 'portrait')->setWarnings(false);
        return $pdf->stream('acta_venta.pdf');
        //return view('backend.reportes.acta_venta', compact('venta'));
    }


}

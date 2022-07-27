@extends('backend.menus.indexSuperior')
 
@section('content-admin-css')
    <link href="{{ asset('css/backend/adminlte3/adminlte.min.css') }}" type="text/css" rel="stylesheet" /> 
    <!-- data table -->
    <link href="{{ asset('css/backend/adminlte3/dataTables.bootstrap4.css') }}" type="text/css" rel="stylesheet" /> 
    <!-- mensaje toast -->
    <link href="{{ asset('plugins/toastr/toastr.min.css') }}" type="text/css" rel="stylesheet" />

@stop

  <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Rastro Municipal</h1>
            </div>

          </div>
        </div>
  </section>
    <!-- seccion frame -->
  <section class="content">
    <div class="container-fluid">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Registro de Cartas de Venta</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
      
              <table id="example2" class="table table-bordered table-hover">
                <thead>             
                <tr>
                  <th style="width: 5%;">N.</th>
                  <th style="width: 27.5%;">Nombre Vendedor</th>
                  <th style="width: 27.5%;">Nombre Comprador</th>
                  <th style="width: 10%;">Total Venta</th>    
                  <th style="width: 15%;">Fecha</th>                             
                  <th style="width: 10%;">Opciones</th>    
                </tr>
                </thead>
                <tbody>
              @foreach($ventas as $datos)
                
                @if($datos->estado == 1) 
				<tr class="table-default">					
                  <td>{{ $datos-> correla }}</td>
                  <td>{{ $datos-> nombreV }}</td>
                  <td>{{ $datos-> nombreC }}</td>
                  <td>{{ $datos-> sumaV }}</td>
                  <td>{{ $datos-> dia }} / {{ $datos-> mes }} / {{ $datos-> ano }}</td>          
                  <td>

                  <button type="button" class="btn btn-info btn-xs" onclick="imprimirVenta({{ $datos->id }})">
                    <i class="fas fa-print" title="Editar"></i>&nbsp; Imprimir
                  </button>
                  <button type="button" class="btn btn-danger btn-xs" onclick="anularVenta({{ $datos->id }})">
                    <i class="fas fa-trash" title="Editar"></i>&nbsp; Eliminar
                  </button>
                  </td>     
				</tr>				  
                @endif
				
              @endforeach  
                </tbody>            
              </table>
             </div>
            </div>          
          </div>
       </div>
      </div>
    </section>


@extends('backend.menus.indexInferior')

@section('content-admin-js')	

  <!-- data table -->
  <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/toastr/toastr.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/axios.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/loading/loadingOverlay.js') }}" type="text/javascript"></script> 
  <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>

  <script>
//*********************** Para darle tiempo al toaster al recargar la pagina */
toastr.options.timeOut = 750;
    toastr.options.fadeOut = 750;
    toastr.options.onHidden = function(){
      // this will be executed after fadeout, i.e. 2secs after notification has been show
     window.location.reload();
    }; 
//************************************************************************** */


function anularVenta(id){
  spinHandle = loadingOverlay().activate(); 
  axios.post('anular_venta',{
    'id': id  
    
      })
      .then((response) => {	
        loadingOverlay().cancel(spinHandle); // cerrar loading

        if(response.data.success == 1){
          toastr.success('Venta Anulada!')
        }else{
          toastr.error('Error', 'No se pudo anular la Venta');  
        }           
      })
      .catch((error) => {
        loadingOverlay().cancel(spinHandle); // cerrar loading   
        toastr.error('Error');               
  });
}

function imprimirVenta(valor){
    console.log(valor);
    window.open("{{ URL::to('admin/pdf_venta') }}/" + valor);
}

//Script para Organizar la tabla de datos
    $(document).ready(function() {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "order": [[ 2, "desc" ]],
        "info": true,
        "autoWidth": false,
        "language": {
        "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas"            
        }
      });
    });
</script>

@stop
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
            <h1>Registro de Cartas de Venta</h1>
          </div>
        </div>
      </div>
  </section>
    <!-- seccion frame -->
  <section class="content">
    <div class="container-fluid">
      <form class="form-horizontal" id="form1">
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Nueva Carta de Venta</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
              </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Correlativo (opcional)</label>
                  <input type="number" name="correla" id="correla" class="form-control" placeholder="correlativo" value="">
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label>Nombre Vendedor</label>
                  <input type="text" name="nombreV" id="nombreV" class="form-control"  placeholder="Nombre del vendedor" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label>Domicilio del vendedor</label>
                  <input type="text" name="domiV" id="domiV" class="form-control"  placeholder="Domicilio del vendedor" value="">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Departamento del vendedor</label>
                  <select name="depaV" id="depaV" class="form-control">
                    <option value="Santa Ana">Santa Ana</option>
                    <option value="San Salvador">San Salvador</option>
                    <option value="Ahuachapán">Ahuachapán</option>
                    <option value="Sonsonate">Sonsonate</option>
                    <option value="Usulután">Usulután</option>
                    <option value="San Miguel">San Miguel</option>
                    <option value="Morazán">Morazán</option>
                    <option value="La Unión">La Unión</option>
                    <option value="La Libertad">La Libertad</option>
                    <option value="Chalatenango">Chalatenango</option>
                    <option value="Cuscatlán">Cuscatlán</option>
                    <option value="La Paz">La Paz</option>
                    <option value="Cabañas">Cabañas</option>
                    <option value="San Vicente">San Vicente</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Suma total</label>
                  <input type="text" name="sumaV" id="sumaV"  placeholder="Suma total de venta" class="form-control" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label>Nombre Comprador</label>
                  <input type="text" name="nombreC" id="nombreC" class="form-control"  placeholder="Nombre del comprador" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label>Domicilio del Comprador</label>
                  <input type="text" name="domiC" id="domiC" class="form-control"  placeholder="Domicilio del comprador" value="">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Departamento del comprador</label>
                  <select name="depaC" id="depaC" class="form-control">
                    <option value="Santa Ana">Santa Ana</option>
                    <option value="San Salvador">San Salvador</option>
                    <option value="Ahuachapán">Ahuachapán</option>
                    <option value="Sonsonate">Sonsonate</option>
                    <option value="Usulután">Usulután</option>
                    <option value="San Miguel">San Miguel</option>
                    <option value="Morazán">Morazán</option>
                    <option value="La Unión">La Unión</option>
                    <option value="La Libertad">La Libertad</option>
                    <option value="Chalatenango">Chalatenango</option>
                    <option value="Cuscatlán">Cuscatlán</option>
                    <option value="La Paz">La Paz</option>
                    <option value="Cabañas">Cabañas</option>
                    <option value="San Vicente">San Vicente</option>

                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>el o (opcional)</label>
                  <input type="text" name="elo" id="elo"  placeholder="" class="form-control" value="">
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>Semoviente (Opcional)</label>
                  <input type="text" name="semo" id="semo"  placeholder="Semoviente" class="form-control" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Expresado (opcional)</label>
                  <input type="text" name="expre" id="expre"  placeholder="Expresado" class="form-control" >
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  <label>A continuacion:</label>
                  <input type="text" name="conti" id="conti"  class="form-control" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label>Semoviente (opcional)</label>
                  <input type="text" name="semo2" id="semo2" placeholder="Semoviente" class="form-control">
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>Herrado</label>
                  <input type="text" name="herrado" id="herrado" placeholder="Herrado" class="form-control">
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>Venteado</label>
                  <input type="text" name="vent" id="vent" placeholder="Venteado" class="form-control">
                </div>
              </div>
              <div class="col-md-3  ">
                <div class="form-group">
                  <label>Fierro</label>
                  <input type="text" name="fierro" id="fierro"  placeholder="Fecha de fierro" class="form-control">
                </div>
              </div>
              <div class="col-md-3  ">
                <div class="form-group">
                  <label>Num Fierro</label>
                  <input type="number" name="numf" id="numF"  placeholder="Numero de fierro" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Departamento del fierro</label>
                  <select name="depaF" id="depaF" class="form-control">
                    <option value="Santa Ana">Santa Ana</option>
                    <option value="San Salvador">San Salvador</option>
                    <option value="Ahuachapán">Ahuachapán</option>
                    <option value="Sonsonate">Sonsonate</option>
                    <option value="Usulután">Usulután</option>
                    <option value="San Miguel">San Miguel</option>
                    <option value="Morazán">Morazán</option>
                    <option value="La Unión">La Unión</option>
                    <option value="La Libertad">La Libertad</option>
                    <option value="Chalatenango">Chalatenango</option>
                    <option value="Cuscatlán">Cuscatlán</option>
                    <option value="La Paz">La Paz</option>
                    <option value="Cabañas">Cabañas</option>
                    <option value="San Vicente">San Vicente</option>

                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Alcaldia</label>
                  <input type="text" name="alcal" id="alcal"  placeholder="Alcadia" value="Metapán" class="form-control">
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>DIA</label>
                  <input type="number" name="dia" id="dia" minlength="2"  placeholder="Día certificado" class="form-control">
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label>MES</label>
                  <input type="number" name="mes" id="mes" minlength="2"  placeholder="Mes certificado" class="form-control">
                </div>
              </div>
              <div class="col-md-2  ">
                <div class="form-group">
                  <label>AÑO</label>
                  <input type="number" name="ano" id="ano" minlength="4"  placeholder="Año certificado" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button id="btnguardar" type="button"  class="btn btn-info float-right" onclick="guardarventa();">Guardar</button>
          </div>
        </div>
      </form>
	  </div>
	</section>
	<!-- /.section -->
@extends('backend.menus.indexInferior')

@section('content-admin-js')

  <!-- data table -->
  <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/toastr/toastr.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/axios.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/loading/loadingOverlay.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/select2.min.js') }}" type="text/javascript"></script>
  <script>

    // guardar venta
    function guardarventa(){

        var correla = document.getElementById('correla').value;
        var nombreV = document.getElementById('nombreV').value;
        var domiV = document.getElementById('domiV').value;
        var depaV = document.getElementById('depaV').value;
        var sumaV = document.getElementById('sumaV').value;
        var nombreC = document.getElementById('nombreC').value;
        var domiC = document.getElementById('domiC').value;
        var depaC = document.getElementById('depaC').value;
        var elo = document.getElementById('elo').value;
        var semo = document.getElementById('semo').value;
        var expre = document.getElementById('expre').value;
        var conti = document.getElementById('conti').value;
        var semo2 = document.getElementById('semo2').value;
        var herrado = document.getElementById('herrado').value;
        var vent = document.getElementById('vent').value;
        var fierro = document.getElementById('fierro').value;
        var numF = document.getElementById('numF').value;
        var depaF = document.getElementById('depaF').value;
        var alcal = document.getElementById('alcal').value;
        var dia = document.getElementById('dia').value;
        var mes = document.getElementById('mes').value;
        var ano = document.getElementById('ano').value;


        var spinHandle = loadingOverlay().activate(); // activar loading

          let formData = new FormData();
          formData.append('correla', correla);
          formData.append('nombreV', nombreV);
          formData.append('domiV', domiV);
          formData.append('depaV', depaV);
          formData.append('sumaV', sumaV);
          formData.append('nombreC', nombreC);
          formData.append('domiC', domiC);
          formData.append('depaC', depaC);
          formData.append('elo', elo);
          formData.append('semo', semo);
          formData.append('expre', expre);
          formData.append('conti', conti);
          formData.append('semo2', semo2);
          formData.append('herrado', herrado);
          formData.append('vent', vent);
          formData.append('fierro', fierro);
          formData.append('numF', numF);
          formData.append('depaF', depaF);
          formData.append('alcal', alcal);
          formData.append('dia', dia);
          formData.append('mes', mes);
          formData.append('ano', ano);

      axios.post('add_venta', formData, {
        })
        .then((response) => {
          loadingOverlay().cancel(spinHandle);

            if(response.data.success == 1){

                toastr.success('Guardado', 'Se ha guardado la nueva venta!');
                document.getElementById("form1").reset();

            }else{
                toastr.error('Error');
            }

        })
        .catch((error) => {
          loadingOverlay().cancel(spinHandle); // cerrar loading
          toastr.error('Error');
      });

}


//Select con buscardor (select2)
jQuery(document).ready(function($){
});
</script>

@stop

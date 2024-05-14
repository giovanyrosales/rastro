<!DOCTYPE html>
<html lang="es">

<head>
  <title>Muni Metap&aacute;n</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- libreria fuentes adminlte3 -->
  <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" type="text/css" rel="stylesheet" />
  <!-- libreria estilos adminlte3 -->
  <link href="{{ asset('css/backend/adminlte3/adminlte.min.css') }}" type="text/css" rel="stylesheet" />
  <link href="{{ asset('css/backend/adminlte3/dataTables.bootstrap4.css') }}" type="text/css" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini">


  <!-- Main content -->
  <div class="wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-12">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Estadísticas de Uso de la Aplicación</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Estadísticas de Uso de la Aplicación</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
    <br><br>

  </div>


  <!-- libreria jquery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>
  <!-- libreria bootstrap4 -->
  <script src="{{ asset('plugins/bootstrap/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  <!-- libreria adminlte3 -->
  <script src="{{ asset('js/backend/adminlte3/adminlte.min.js') }}" type="text/javascript"></script>
  <!-- ChartJS -->
  <script src="{{ asset('js/backend/adminlte3/Chart.min.js') }}"></script>

  @yield('content-admin-js')
</body>

</html>

<!-- Hereda plantilla -->
@extends("theme.lte.layout")

<!-- Se fija el titulo de la pagina -->
@section('titulo')
    Permisos
@endsection

<!-- Se Inserta el contenido -->
@section('contenido')


<!-- Se inserta la tabla -->
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Permisos</h3>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Slug</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($permisos as $permiso)
                            <tr>
                                <td>{{$permiso->id}}</td>
                                <td>{{$permiso->nombre}}</td>
                                <td>{{$permiso->slog}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
<!-- Termina el contenido -->

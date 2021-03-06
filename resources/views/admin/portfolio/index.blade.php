@extends('adminlte::page')

@section('title', 'PORTFOLIO - Admin')
@section('css')
 <link rel="stylesheet" href="/css/admin_custom.css"> 

@stop

@section('content')
             <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <!-- TABLE: LATEST ORDERS -->
        <div class="col-12">
            <div class="card">
                <div class="card-header border-transparent">
                <h3 class="card-title">Lista de proyectos
                    <button type="button" class="ml-4 btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear proyecto</button>
                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Imagen</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>
                                <img src="{{asset('images/portfolio/'.$project->featured)}}" class="img-fluid img-rounded" width="120px" alt="{{$project->title}}">
                            </td>
                            <td>{{ $project->description }}</td>
                            <td>
                              <a href="{{route('admin.portfolio.edit', $project->id)}}" class="btn btn-warning">Editar</a>

                                <form action="{{route('admin.portfolio.delete' , $project->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete" />
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Crear proyecto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('admin.portfolio.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="col-form-label">Título:</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Descripción:</label>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="featured" class="col-form-label">Imagen:</label>
                        <input type="file" class="form-control" name="featured" id="featured">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /.modal -->
 @stop


@section('js')
    <script> console.log('Hi!'); </script>
@stop
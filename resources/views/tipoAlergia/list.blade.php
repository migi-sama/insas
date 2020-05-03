@extends('theme.layout')

@section('contenido')

<section class="content-header">
<h1>
    Tablas simples
    <small>Previsualización</small>
</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Un ejemplo de cómo debería quedar, opina</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nombre</th>
                                <th colspan="2" style="width: 40px">Acciones</th>
                            </tr>
                            @foreach($tipos ?? '' as $tipo)
                                <tr>
                                    <td>{{ $tipo->id }}</td>
                                    <td>{{ $tipo->name }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">
                                            <i class="fa fa-edit"></i>
                                            Editar
                                        </a>
                                    </td>
                                    <td>
                                        <form action="#" method="post">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <button class="btn btn-danger fa fa-trash-alt" type="submit" 
                                            onclick="return confirm('¿Está seguro de eliminarlo?')">
                                            Eliminar</button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                  {!! $tipos ?? ''->links() !!}

                </div><!-- /.box-body -->
            </div>
        </div>
    </div>
</section>

@endsection

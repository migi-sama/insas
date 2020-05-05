@extends('theme.layout')

@section('titulo')
    Crear Alergia
@endsection

@section('contenido')
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Alergia</h3>
                </div>
                <form action="{{ route('alergia.update', $alergia_info->id) }}" id="form-general" class="form-horizontal" name="update_Alergia" method="POST">
                    {{ csrf_field() }}
                    @method('PATCH')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
                            <div class="col-lg-8">
                              <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $alergia_info->nombre }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion" class="col-lg-3 control-label requerido">Descripción</label>
                            <div class="col-lg-8">
                              <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ $alergia_info->descripcion }}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descripcion" class="col-lg-3 control-label requerido">Tipo</label>
                            <div class="col-lg-8">
                                <select name="tipoAlergia_id" id="tipoAlergia_id" class="form-control">
                                    <option value="">--Seleccione--</option>
                                    @foreach($tipos as $tipo)
                                        <option @if($tipo->id == $alergia_info->tipoAlergia_id) selected  @endif
                                        value="{{$tipo['id']}}"> {{$tipo['name']}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="col-lg-3"></div>
                            <button type="reset" class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registro Perfil</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('perfil.store') }}" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group row">
                                    <label for="profesion" class="col-md-4 col-form-label text-md-right">Profesión</label>
        
                                    <div class="col-md-6">
                                        <input type="text" class="form-control @error('profesion') is-invalid @enderror" name="profesion" required value ="un valor del modelo">
        
                                        @error('profesion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="telefono" class="col-md-4 col-form-label text-md-right">Telefono</label>
        
                                    <div class="col-md-6">
                                        <input type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" required>
        
                                        @error('telefono')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="ciudad" class="col-md-4 col-form-label text-md-right">Ciudad</label>
        
                                    <div class="col-md-6">
                                        <input type="text" class="form-control @error('ciudad') is-invalid @enderror" name="ciudad" required>
        
                                        @error('ciudad')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="imagen" class="col-md-4 col-form-label text-md-right">Imagen de perfil</label>
        
                                    <div class="col-md-6">
                                        <input id="imagen" type="file" class="form-control" name="imagen" required>
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Guardar
                                        </button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('perfil.student')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"> Nombres:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellidos:</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perfil" class="col-md-4 col-form-label text-md-right">Imagen Perfil:</label>

                            <div class="col-md-6">
                                <input id="perfil" type="file" class="form-control @error('perfil') is-invalid @enderror" name="perfil" value="{{ old('perfil') }}" required autocomplete="curriculum" autofocus>

                                @error('perfil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Descripción:</label>

                            <div class="col-md-6">
                                <textarea id="descripcion"
                                class="form-control"
                                name="descripcion"
                                required>{{ old('descripcion')}}</textarea>

                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div> --}}
                        <fieldset class="border p-4">
                            <legend class="text-primary text-center mt-4">Datos para semillero</legend>
                            <div class="container-lg my-4">
                                  <div class="container">
                                    <div class="accordion" id="accordionExampleAbout" style="margin-bottom: 10px; padding: 10px;">
                                      <div class="card" style="border-radius: 10px;">
                                        <div class="card-header" id="heading" style="background-color: #DCDCDC;">
                                          <h4 class="mb-0">
                                            A cerca del estudiante
                                          </h4>
                                        </div>
                                          <div class="card-header shadow" id="cultural" role="button" data-toggle="collapse" href="#collapse_About" aria-expanded="true" aria-controls="collapseOne" class="trigger collapsed" style="text-decoration:none;">
                                            <h5 class="panel-title">
                                              <a>
                                              Datos
                                              </a>
                                            </h5>
                                          </div>
                                          <div id="collapse_About" class="panel-collapse collapse" aria-labelledby="About_student" data-parent="#accordionExampleAbout">
                                            <div class= "card-body">
                                                <div class="form-group row">
                                                    <label for="edad" class="col-md-4 col-form-label text-md-right">Edad:</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="edad" type="text" class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{ old('edad') }}" required autocomplete="edad" autofocus>
                        
                                                        @error('descripcion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="profesion" class="col-md-4 col-form-label text-md-right">Profesion:</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="profesion" type="text" class="form-control @error('profesion') is-invalid @enderror" name="profesion" value="{{ old('profesion') }}" required autocomplete="profesion" autofocus>
                        
                                                        @error('descripcion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cargo" class="col-md-4 col-form-label text-md-right">Cargo:</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="cargo" type="text" class="form-control @error('cargo') is-invalid @enderror" name="cargo" value="{{ old('cargo') }}" required autocomplete="cargo" autofocus>
                        
                                                        @error('descripcion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="languages"class="col-md-4 col-form-label text-md-right">Idiomas:</label>
                                                        <div class="custom-control custom-checkbox">
                                                        {{-- <input type="checkbox"
                                                        class="custom-control-input" 
                                                        id="language_{{$language->id}}"
                                                        value="{{$language->id}}"
                                                        name="languages[]"
                                                        >
                                                        <label class="custom-control-label" 
                                                            for="language_{{$language->id}}">
                                                            {{ $language->name_language }} 
                                                        </label> --}}
                                                        
                                                        <input type="checkbox" name="leng[]" value="Español">Español<br/>
                                                        <input type="checkbox" name="leng[]" value="Ingles">Ingles<br/>
                                                        <input type="checkbox" name="leng[]" value="Frances">Frances<br/>
                                                        <input type="checkbox" name="leng[]" value="Portugues">Portugues<br/>
                                                        <input type="checkbox" name="leng[]" value="Italiano">Italiano<br/>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="curriculum" class="col-md-4 col-form-label text-md-right">Hoja de vida:</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="curriculum" type="file" class="form-control @error('curriculum') is-invalid @enderror" name="curriculum" value="{{ old('curriculum') }}" required autocomplete="curriculum" autofocus>
                        
                                                        @error('curriculum')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="añossemillero" class="col-md-4 col-form-label text-md-right">Años en el semillero:</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="añossemillero" type="number" class="form-control @error('añossemillero') is-invalid @enderror" name="añossemillero" value="{{ old('añossemillero') }}" required autocomplete="añossemillero" autofocus>
                        
                                                        @error('descripcion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cantidaddeponencias" class="col-md-4 col-form-label text-md-right">Cantidad de ponencias realizadas:</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="cantidaddeponencias" type="number" class="form-control @error('cantidaddeponencias') is-invalid @enderror" name="cantidaddeponencias" value="{{ old('cantidaddeponencias') }}" required autocomplete="cantidaddeponencias" autofocus>
                        
                                                        @error('descripcion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="participacionproyectos" class="col-md-4 col-form-label text-md-right">Participación en proyectos:</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="participacionproyectos" type="number" class="form-control @error('participacionproyectos') is-invalid @enderror" name="participacionproyectos" value="{{ old('participacionproyectos') }}" required autocomplete="participacionproyectos" autofocus>
                        
                                                        @error('descripcion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="semestreactual" class="col-md-4 col-form-label text-md-right">Semestre actual:</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="semestreactual" type="number" class="form-control @error('semestreactual') is-invalid @enderror" name="semestreactual" value="{{ old('semestreactual') }}" required autocomplete="semestreactual" autofocus>
                        
                                                        @error('descripcion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                          </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>                       
                            </div>
                            <div class="container-lg my-4">
                                <div class="container">
                                  <div class="accordion" id="accordionExample-education" style="margin-bottom: 10px; padding: 10px;">
                                    <div class="card" style="border-radius: 10px;">
                                      <div class="card-header" id="heading" style="background-color: #DCDCDC;">
                                        <h4 class="mb-0">
                                          Educación
                                        </h4>
                                      </div>
                                        <div class="card-header shadow" id="cultural" role="button" data-toggle="collapse" href="#collapse-education" aria-expanded="true" aria-controls="collapseOne" class="trigger collapsed" style="text-decoration:none;">
                                          <h5 class="panel-title">
                                            <a>
                                            Información
                                            </a>
                                          </h5>
                                        </div>
                                        <div id="collapse-education" class="panel-collapse collapse" aria-labelledby="Datos educación" data-parent="#accordionExample-education">
                                          <div class= "card-body">
                                            <div class="form-group row">
                                                <label for="año" class="col-md-4 col-form-label text-md-right">Año:</label>
                    
                                                <div class="col-md-6">
                                                    <input id="año" type="date" class="form-control @error('año') is-invalid @enderror" name="año" value="{{ old('año') }}" required autocomplete="año" autofocus>
                    
                                                    @error('descripcion')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="titulo" class="col-md-4 col-form-label text-md-right">Titulo:</label>
                    
                                                <div class="col-md-6">
                                                    <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" required autocomplete="titulo" autofocus>
                    
                                                    @error('descripcion')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="categoria" class="col-md-4 col-form-label text-md-right">Categoria:</label>
                    
                                                <div class="col-md-6">
                                                    <select required name="category" id="category" class="form-control">
                                                        <option value="">Selecionar</option>
                                                        <option value="Taller">Taller</option>
                                                        <option value="Seminario">Seminario</option>
                                                        <option value="Curso">Curso</option>
                                                        <option value="Diplomado">Diplomado</option>
                                                        <option value="Especialización">Especialización</option>
                                                        <option value="Maestria">Maestria</option>
                                                        <option value="Pregrado">Pregrado</option>
                                                    @error('descripcion')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">Descripción del titulo:</label>
                    
                                                <div class="col-md-6">
                                                    <textarea id="descripcion_education"
                                                    class="form-control"
                                                    name="descripcion_education" required>{{ old('descripcion_education')}}</textarea>
                    
                                                    @error('descripcion_education')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                       
                          </div>
                          <div class="d-grid gap-2 col-6 mx-center">
                            <button class="btn btn-primary" type="submit">Registrar

                            </button>
                          </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
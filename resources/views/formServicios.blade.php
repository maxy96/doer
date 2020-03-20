@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-orange card-register">
                <div class="card-header txt-white bg-orange border-orange">{{ __('Agregar nuevo servicio') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('nuevo.servicio')}}">

                         {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="tipoServicio" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de servicio') }}</label>

                            <div class="col-md-6 ">
                                <select name="tipoServicio" id="tipoServicio" class="form-control @error('tipoServicio') is-invalid @enderror">
                                	<option value="0">-- Seleccione tipo de servicio --</option>                               
                           		 </select>

                                @error('tipoServicio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-md-center">
                            	<div class=" checkbox">
                                	<input class="@error('opcion') is-invalid @enderror" type="checkbox" name="opcion" id="opcion" >
                                	<label for="opcion" >Atencion 24hs</label>
                                	@error('opcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
                           		</div>
                           		
                        	</div>

                        </div>
                        <div id="horario" style="transition: height 3s;">
	                        <label for="" class="col-md-12 col-form-label text-md-left"><i>{{ __('Hora de atencion matutina') }}</i></label>
	                        <div class="form-group row" id="matutino">
	                            <label for="abiertoMatutino" class="col-md-3 col-form-label text-md-right">{{ __('Abierto') }}</label>  
	                            <div class="col-md-3">                           	
	                                <input id="abiertoMatutino" type="time" class="form-control @error('abiertoMatutino') is-invalid @enderror" name="abiertoMatutino" >
	                                @error('abiertoMatutino')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                            	 @enderror
	                            </div>
									
	                            <label for="cerradoMatutino" class="col-md-3 col-form-label text-md-right">{{ __('Cerrado') }}</label> 
	                            <div class="col-md-3">
	                                <input id="cerradoMatutino" type="time" class="form-control" name="cerradoMatutino">
	                            </div>
	                        </div>

	                        <label for="" class="col-md-12 col-form-label text-md-left"><i>{{ __('Hora de atencion vespertina') }}</i></label>
	                        <div class="form-group row" >
	                            <label for="abiertoVespertino" class="col-md-3 col-form-label text-md-right">{{ __('Abierto') }}</label>  
	                            <div class="col-md-3">                           	
	                                <input id="abiertoVespertino" type="time" value="" class="form-control" name="abiertoVespertino" >
	                            </div>

	                            <label for="cerradoVespertino" class="col-md-3 col-form-label text-md-right">{{ __('Cerrado') }}</label> 
	                            <div class="col-md-3">
	                                <input id="cerradoVespertino" type="time" value="" class="form-control" name="cerradoVespertino">
	                            </div>
	                        </div>
						</div>
						<label for="informacion" class="col-md-12 col-form-label text-md-left"><i>{{ __('Informacion acerca del servicio') }}</i></label> 
						<div class="form-group row" >
							<div class="col-md-12 ">
								<textarea class="form-control" id="informacion" name="informacion" rows="6" cols="0" style="resize: none;">Agregue información acerca de sus servicios... </textarea>		
							</div>
						</div>
                        <div class="form-group row my-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar servicio') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
      $(function(){
		$('#opcion').change(function(){
  			if($(this).prop('checked')){
    			$('#horario').hide();
    		}else{
    			$('#horario').show();
   			 }
   		})
   	});    
</script>
@endsection

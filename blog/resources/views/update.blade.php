<!DOCTYPE html>
<html lang="en">
<head>
<!--<meta name="csrf-token" content="{{ csrf_token() }}" />-->
	<meta charset="UTF-8">
	<title>Document</title>
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css')  }}">
   
  <!-- Agregando cdn --> 
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script> 
   
  <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}" ></script>  
  <script type="text/javascript" src="{{ url('js/bootstrap.js') }}" ></script>
 
</head>
<body>


<form method="POST" action="{{ url('/edit',array($user->id)) }}" >

  <fieldset>
    <legend>Legend</legend>

     
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> 
    
    
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)  
            <div class="alert alert-danger">
              {{$error}}
            </div>
        @endforeach
  
    @endif

  

     <div class="form-group">
      <label for="title"> Nombres </label>
     
       <input type="input" class="form-control" id="nombres"  name="nombres" placeholder="Enter title" value="<?php echo $user->nombres ; ?>" >
     
    </div>

    
     <div class="form-group">
      <label for="exampleInputArea">Usuario</label>
     
      <input type="input" class="form-control" id="usuario"  name="usuario" placeholder="Enter title" value="<?php echo $user->usuario ; ?>" >

    </div>

    <div class="form-group">
      <label for="exampleInputArea">Tipo</label>
     
      <input type="input" class="form-control" id="tipo"  name="tipo" placeholder="Enter title" value="<?php echo $user->tipo ; ?>" >

    </div>


    <div class="form-group">
      <label for="exampleInputArea">Codigo</label>
     
      <input type="input" class="form-control" id="codigo"  name="codigo" placeholder="Enter title" value="<?php echo $user->codigo ; ?>"  >

    </div>

    <div class="form-group">
      <label for="exampleInputArea">Zona </label>
     
      <input type="input" class="form-control" id="zona"  name="zona" placeholder="Enter title" value="<?php echo $user->zona ; ?>" >

    </div>

    <div class="form-group">
      <label for="exampleInputArea">Agencia</label>
     
      <input type="input" class="form-control" id="agencia"  name="agencia" placeholder="Enter title" value="<?php echo $user->agencia ; ?>"  >

    </div>
    
    
   
  	<a href="{{ url('/users') }}" class="btn btn-primary">Regresar</a>
    <button type="submit" class="btn btn-primary">Ingresar </button>
  </fieldset>
</form>
	
</body>
</html>
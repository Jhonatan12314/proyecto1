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


<form method="POST" action="{{ url('/insert') }}" >

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
      <label for="title">Title</label>
     
       <input type="input" class="form-control" id="title"  name="title" placeholder="Enter title">
     
    </div>

    
     <div class="form-group">
      <label for="exampleInputArea">Description</label>
     
      <textarea class="form-control" id="description" name="description" placeholder="area" ></textarea>  
    </div>
    
    
   
  	<a href="{{ url('/') }}" class="btn btn-primary">Regresar</a>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
	
</body>
</html>
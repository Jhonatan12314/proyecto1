<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css')  }}">
   
  <!-- Agregando cdn --> 
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script> 
   
  <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}" ></script>  
  <script type="text/javascript" src="{{ url('js/bootstrap.js') }}" ></script>
  

  <script src="{{ url('js/main.js')  }}"></script>


</head>
<body>

<!--
@if(session('info'))
  <div class="alert-success"> 
  
  {{session('info')}}
 </div>
@endif

-->

@include('nuevo')



  <!--<button type="button" class="btn btn-info btn-sm pull-left" style="    margin-bottom: 10px;
" data-toggle="modal" data-target="#addModal">Añadir</button>
-->

  <a href="#" class="create-modal btn btn-success btn-sm">
            <i class="glyphicon glyphicon-plus"></i>
           Crear 
          </a>



<table class="table table-hover" border="1" id="table">
  <thead>

    <tr>
      
      <th scope="col" colspan="7"> Usuarios Registrados</th>
      
    </tr>
      
    <tr>
      <th scope="col"> Nombre y Apellido </th>
      <th scope="col"> Nombre de Usuario </th>
      <th scope="col"> Tipo de Usuario </th>
      <th scope="col"> Cod. Trabajador </th>
      <th scope="col"> Zona  </th>
      <th scope="col"> Agencia  </th>
      <th scope="col"> Accion  </th>
    </tr>
  </thead>
  <tbody >
    @if(count($users)>0)
        @foreach($users->all() as $user )


   
    <tr class="table-active text-user"  data-id="{{ $user->id }}" >
      <td scope="row" class="nombre">{{$user->nombres}}</td>
      <td class="usuario">{{$user->usuario}}</td>
      <td class="tipo" >{{$user->tipo}}</td> 
      <td class="codigo" >{{$user->codigo}}</td>
      <td class="zona" >{{$user->zona}}</td>
      <td class="agencia" >{{$user->agencia}}</td>
      <td >

       <!-- <a href= '{{ url("/update/{$user->id}") }}'  class="btn btn-primary">Editar</a> -->
        <a class="edit" href="{{ route('user.edit', ['id' => $user->id]) }}">Editar</a>

        <a href='{{  url("/delete/{$user->id}") }}' class="btn btn-danger">Eliminar</a>

      </td>
    </tr>


 

       @endforeach
    @endif

    <!-- Add Modal start -->
    <div class="modal fade" id="create" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
        <h5 class="modal-title">MINKAY</h5>
            <!--<button type="button" class="close" data-dismiss="modal" aria-label="">
              <span aria-hidden="false">&times;</span>
               
            </button>-->
         </div>
          <div class="modal-body">
            <form form class="form-horizontal" role="form" >
              {{ csrf_field() }}
            <div class="form-group">
              <div class="row"> 
                <div class="col-md-6">     
                  
                  <div class="form-group">
                    <label for="name"> Nombre :</label>
                    <input type="text" class="form-control" id="nombres" name="nombres">
                  </div>

                  <div class="form-group">
                    <label for="name"> Nombre de Usuario </label>
                    <input type="text" class="form-control" id="usuario" name="usuario">
                  </div>

                  <div class="form-group">
                    <label for="name"> Correo Electronico </label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>

                  <div class="form-group">
                    <label for="name"> Tipo de usuario </label>
                    <!--<input type="text" class="form-control" id="Nombre" name="Nombre">-->
                    <select name="tipo" id="tipo" class="form-control" >
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="name"> Agencia</label>
                    <!--<input type="text" class="form-control" id="Nombre" name="Nombre"> -->
                    <select name="agencia" id="agencia" class="form-control" >
                       <option value="uno">uno</option>
                       <option value="dos">dos</option>
                       <option value="tres">tres</option>
                       <option value="cuatro">cuatro</option>
                    </select>

                  </div>

                              
                  

                  <!--<label for="short">adsfasd:</label>-->
                  <!--<input type="text" class="form-control" id="Direccion" name="Direccion">-->

                </div>

                <div class="col-md-6"> 

                    <div class="form-group">
                    <label for="name"> Apellido :</label>
                    <input type="text" class="form-control" id="apellido" name="apellido">
                  </div>

                  <div class="form-group">
                    <label for="name"> Contraseña </label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena">
                  </div>

                  <div class="form-group">
                    <label for="name"> Numero de Telefono  </label>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                  </div>

                  <div class="form-group">
                    <label for="name"> Zona  </label>
                   <!-- <input type="text" class="form-control" id="Nombre" name="Nombre">-->

                    <select name="zona" id="zona" class="form-control" >
                       <option value="zona1">zona1</option>
                       <option value="zona2">zona2</option>
                       <option value="zona3">zona3</option>
                       <option value="zona4">zona4</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="name"> Codigo del Trabajador  </label>
                    <input type="text" class="form-control" id="codTrabajador" name="codTrabajador">
                  </div>



                  </div>

              


              </div>
            </div>
              
              <!--<button type="submit" class="btn btn-default">Guarda</button>-->
            </form>
          </div>
      <div class="modal-footer">
               
<!--
        <div class="col-md-6">
            <button type="button" class="btn btn-secondary btn-lg btn-block  " data-dismiss="modal"  > Cancelar </button>
        </div> 

         <div class="col-md-6">
          <button type="submit" id="add" class="btn btn-primary btn-lg btn-block " > Aceptar  </button>
        </div> 
      -->
      
        <div class="col-md-6">
          <button type="submit" id="add" class="btn btn-primary btn-lg btn-block " > Aceptar  </button>
        </div> 

       <div class="col-md-6">
            <button type="button" class="btn btn-secondary btn-lg btn-block  " data-dismiss="modal"  > Cancelar </button>
        </div> 
     <!--
      <button class="btn btn-warning" type="submit" id="add">

              <span class="glyphicon glyphicon-plus"></span>Save Post
            </button>

            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>

-->
      </div>

        </div>
        
      </div>
    </div>
    <!-- add code ends -->
  
  </tbody>  
</table>




</body>
</html>
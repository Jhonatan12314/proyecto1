<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

@if(session('info'))
  <div class="alert-success"> 
  
  {{session('info')}}
 </div>
@endif


<table class="table table-hover" border="1">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if(count($articles)>0)
        @foreach($articles->all() as $article )


   
    <tr class="table-active">
      <td scope="row">{{$article->id}}</td>
      <td>{{$article->title}}</td>
      <td>{{$article->description}}</td>
      <td>

        <a href="{{ url('')}}" class="label label-primary">enviar1</a>
        <a href="{{ url('')}}" class="label label-primary">enviar1</a>

      </td>
    </tr>

       @endforeach
    @endif
  
  </tbody>
</table> 

  
</body>
</html>
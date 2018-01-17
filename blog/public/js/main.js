



$(document).on('click','.create-modal', function() {
    $('#create').modal('show');
    $('.form-horizontal').show();
    $('.modal-title').text('Minkay2');
  });
  


$(document).on('click','#add',function(e) {
  //handler code here
  //console.log($('input[name=_token]').val());
   
   /*
    $.ajax({
      type: 'POST',
      url: 'addPost',
      data: {

        '_token': $('input[name=_token]').val(),
        'nombres': $('input[name=nombres]').val()
        
      },
      success: function(data){
        console.log(data);
      },
    }); 

    alert()
*/

 //alert();
     
     $.ajax({
      type:'POST',
      url: "ruta1",
      data: {
        '_token': $('input[name=_token]').val(),
        'nombres': $('input[name=nombres]').val(),
        'usuario' : $('input[name=usuario]').val(),
        'email' : $('input[name=email]').val(),
        'apellido' : $('input[name=apellido]').val(),
        'contrasena' : $('input[name=contrasena]').val(),
        'telefono' : $('input[name=telefono]').val(),
        'codTrabajador' : $('input[name=codTrabajador]').val(),
        'tipo' : $('select[name=tipo]').val(),
        'agencia' : $('select[name=agencia]').val(),
        'zona' : $('select[name=zona]').val()

        
      },
      success: function(data){  
        console.log(data);
        
        $('#create').modal('hide');
          $('#table').append("<tr class='table-active '>"+
          "<td>" + data.nombres + " "+data.apellido + "</td>"+
          "<td>" + data.usuario + "</td>"+
          "<td>" + data.tipo + "</td>"+
          "<td>" + data.codigo + "</td>"+
          "<td>" + data.zona + "</td>"+
          "<td>" + data.agencia + "</td>"+


            

          )
                                                             

                      
        

    }});

  
 // alert("ajegl");
});



   
    

    
    //$('#title').val('');
    //$('#body').val('');
  
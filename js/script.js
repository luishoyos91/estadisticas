$(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: 'php/cargar_listas.php'
    })
    .done(function(listas_rep){
      $('#lista_paises').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los paises')
    })
  
    $('#lista_paises').on('change', function(){
      var id = $('#lista_paises').val()
      $.ajax({
        type: 'POST',
        url: 'php/cargar_ciudades.php',
        data: {'id_pais': id}
      })
      .done(function(listas_rep){
        $('#ciudades').html(listas_rep)
      })
      .fail(function(){
        alert('Hubo un error al cargar las ciudades')
      })
    })
  
    $('#ciudades').on('click', function(){
      var resultado = 'Lista de reproducción: ' + $('#lista_paises option:selected').text() +
      ' Video elegido: ' + $('#ciudades option:selected').text()
  
      $('#resultado1').html(resultado)
    })
  
  })
$(document).ready(function()
{
  //$('#error').fadeIn(500).delay(2000).fadeOut(800);

  $('#btnSubmit').on('click', function(event)
  {
      event.preventDefault();

      var usuario = $("#txtUser").val();
          pass = $("#txtPass").val();

      if (usuario && pass)
      {
          $.ajax({
            url: '../app/login.php',
            type: 'POST',
            dataType: 'json',
            //data: {txtUser: usuario, txtPass: pass},
            data: $('#form').serialize(),

            success: function(response) {
              console.log(response);
              if (response.status) {
                $('.cartel_error').hide();
                $('.cartel').fadeIn('slow/600/fast').delay(1000).fadeOut(1000,function(){
       window.location.href = "main.php?msj=success_logued;"
    })

              } else {
                console.log(response);
                $('.cartel_error').fadeIn('slow/600/fast');
                
              };
            }
          });
      }
  });

});
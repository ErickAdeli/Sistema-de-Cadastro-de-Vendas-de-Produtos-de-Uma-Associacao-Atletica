

  function rolar()
  {

  $(function(){
              $("ul a").click(function (event) {
                event.preventDefault();
                
                var idElemento = $(this).attr("href");
                var deslocamento = $(idElemento).offset().top;
                $('html, body').animate({ scrollTop: deslocamento }, 'slow');
              });
            });
  }


  function Enviar()
  {

  	var nome = document.getElementById("name");
  	var email = document.getElementById("email");
  	var message = document.getElementById("mensagem");

      if (nome.value != "" && email.value != "" && message.value!="" )
      {
          alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso.');
      }else 
      {
          alert('Fields empty');
      }

  }

 function Cadastrar()
 {

	var nome = document.getElementById("name");

    if (nome.value != "") 
    {
        alert('Obrigado sr(a) ' + nome.value + ' você está cadastrado em nosso banco de dados.');
    }

 }

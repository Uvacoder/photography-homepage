$(function() {

$("#contatti").validate ({
  rules:{
    "nome":{
      required: true,
      minlength: 4
    },
    "email":{
      required: true,
      email: true
      },
    "messaggio":{
        required: true,
        minlength: 6
      }
    },
    messages:{
    "nome":{
        required "Per favore riempi questo campo",
        minlength "Il nome deve contenere almeno 4 caratteri"
    },
    "email":{
        required "Per favore riempi questo campo",
        email "Inserisci un indirizzo email valido"
      },
    "messaggio":{
        required "Per favore riempi questo campo",
        minlength "Sforzati di più, scrivimi qualcosa di più lungo!"
      }
    },
    submitHandler : function(form){
      form.submit();
  }
  })
  }),
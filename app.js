$("#form_criar").validate({
       rules : {
             nome:{
                    required:true,
                    minlength:3
             },
             email:{
                    required:true
             },
             senha:{
                    required:true
             }                                
       },
       messages:{
             nome:{
                    required:"Por favor, informe seu nome",
                    minlength:"O nome deve ter pelo menos 3 caracteres"
             },
             email:{
                    required:"É necessário informar um email válido"
             },
             senha:{
                    required:"A mensagem não pode ficar em branco"
             }     
       }
});
$(document).ready(function(){

    var DIRPAGE="http://"+document.location.hostname+"/";
    
    $('#FormSelect').on('submit',function(event){
        event.preventDefault();
        var Dados=$(this).serialize();

        $.ajax({
            url: DIRPAGE+'cadastro/seleciona',
            method='post',
            dataType:'html',
            data: Dados,
            success:function(Dados){
                $('.Resultado').html(Dados);
            }
        });

        $(document).on('click','.ImageEdit',function(){
            var ImgRel=$(this).attr('rel');
            
            $.ajax({
                url: DIRPAGE+'cadastro/puxaDB/'+ImgRel,
                method:'post',
                dataType:'html',
                data:{'ID':ImgRel},
                success:function(data){
                    $('.ResultadoFormulario').html(data);
                }
            });
        });
    });

});
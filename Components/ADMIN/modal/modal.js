// let modal = document.getElementById('modal')
let elemento = document.getElementById('id_escondido')

$(document).ready(function(){
    $(document).on('click', '.view_data', function(){
        var user_id = $(this).attr("id");
        if(user_id !== ''){
            var dados = {
                user_id: user_id
            };
        };
        $.post('visualizar.php', dados, function(retorna){
            $('#info_user').html(retorna);
            $('#info_user').css('color', 'black')
            $('#modal')[0].showModal();
        });
    }) 
});  


function PegarID(ID){
    console.log(ID)
}

function fecharModal(){
    modal.close();
}

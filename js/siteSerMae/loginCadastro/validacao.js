const formValidate = document.getElementById('myForm');

if(formValidate){
    formValidate.addEventListener('submit', (e) => {


        const listaDeInputs = document.querySelectorAll(".input-form-validate")
        // console.log(listaDeInputs)

        for(let contador = 0; contador < listaDeInputs.length; contador++){
            const inputField = listaDeInputs[contador]
            // console.log(inputField)

            const nameInput = inputField.classList[0]
            // console.log(nameInput)

            var valueInputValidate = document.getElementById(nameInput).value;

            if(valueInputValidate === ""){
                e.preventDefault();

                var listaInputValidate = listaInputValidate;
                console.log(listaInputValidate)

                if(listaInputValidate.hasOwnProperty(nameInput)){
                    document.getElementById("msg").innerHTML = "<p style='color: #f00; font-size: 12px'>" + listaInputValidate[nameInput] + "</p>"
                }else{
                    document.getElementById("msg").innerHTML = "<p style='color: #f00; font-size: 12px'>Preencha todos os campos corretamente!</p>"
                }

                return;
            }
        }

        function listaInputValidate(){
            var listInputValidate = {
                'input-nome' : "Preencha o campo nome!",
                'input-sobrenome' : "Preencha o campo sobrenome!",
                'input-data' : "Preencha o campo data de nascimento!",
                'input-telefone' : "Preencha o campo telefone!",
                'input-email' : "Preencha o campo email!",
                'input-senha' : "Preencha o campo senha!",
                'input-confirma' : "Preencha o campo confirmar senha!"
            }

            return listaInputValidate;
        }
});
}
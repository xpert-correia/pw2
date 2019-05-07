$(document).ready(function(){

    //click do botao soma
    $("#calcular").click(function(event){
        event.preventDefault();

        var num1 = $("#num1").val();
        var num2 = $("#num2").val();

        if(num1 != "" && num2 != "")
        {
            //se os requesitos dos numeros forem preenchidos
            var numeros = {
                "num1": num1,
                "num2": num2
            };

            var numerosJSON = JSON.stringify(numeros);

            $.ajax({
                type: "POST",
                url: "process.php",
                data: numerosJSON,
                success: function(data){
                    $("#resultado").text(data);
                },
        
                error: function(data){
                    alert("Nao inseriu ambos os numeros");
                }
            });
        }
        else{
            $("#resultado").text("Preencha os campos");
        }
    });
});
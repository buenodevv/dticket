$("#btn_salvar").on("click", function(){
    var txt_name = $("#name").val();
    console.log(txt_name);

    $.ajax({
        url: "./profissionais/insert.php",
        type: "post",
        data: {
            name: txt_name

        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(e){
        $("#resposta").html("Dados resgistrado com sucesso...")
    })
})
//@Title: COSUMO DE API - PIXABAY
//@Athor: VINÍCIUS LESSA e ANDERSON NASCIMENTO
//@Course: DESENVOLVIEMTNO PARA SERVIDORES
//@Location: FATEC - SÃO ROQUE

    // Efeitos Visuais ao Carregar página
    $(document).ready(function(){
        
        $(".delay").css("display","none");
        $("#alert").css("display","none");
        
        $(".delay").fadeIn(3000);
        
    });


    // Valida FORM (checkboxes)
    function ValidateForm(form){
        
        if ((form.tipo[0].checked == false ) && (form.tipo[1].checked == false )){
            
            document.getElementById("alert").innerHTML = "Selecione ao menos um tipo de Busca! (Imagem ou Vídeo)";
            $("#alert").css("display","inline");
            
            form.reset();
            
            return false;
        }

        if ((form.tipo[0].checked == true ) && (form.tipo[1].checked == true )){
            
            //bootbox.alert("Por favor Selecione Somente um tipo de busca! (Imagem ou Vídeo)");
            document.getElementById("alert").innerHTML = "Por favor, selecione somente um tipo de busca! (Imagem ou Vídeo)";
            $("#alert").css("display","inline");
            
            form.reset();
            
            return false;
        }
    }

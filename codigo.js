$("#formLogin").submit(function(e){
    e.preventDefault();
    var usuario  = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());
    
    if(usuario.length == "" || password == ""){
        return false;
    }else{
        $.ajax({
            url: "database/login.php",
            type: "POST",
            datatype: "json",
            data: {usuario:usuario, password:password},
            success:function(data){
                if(data == "null"){
                    Swal.fire({
                        icon: 'error',
                        title: 'Ups...Usuario o Contraseña incorrecta',
                        text: 'Intentalo otra vez!',
                        confirmButtonText: 'Esta bien',
                        confirmButtonColor: "#096bd4",
                    });
                }else{ 
                    Swal.fire({
                        icon: 'success',
                        title: 'Conexion Exitosa',
                        html: 'Iniciando Sseión',
                        timer: 1200,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey:false,
                    }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        // window.location.href = "views/pag_inicio.php";
                        window.location.href = "dashboard/index.php";
                    }
                    })
                }
            }
        })
    }
});
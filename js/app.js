window.addEventListener("load",() => {

    let button = document.getElementById("formulario");
    let usuario = document.getElementById("usuario");
    let contraseña = document.getElementById("contraseña");
    

      function data() {
        let datos = new FormData();
        datos.append("usuario", usuario.value);
        datos.append("contraseña", contraseña.value);
        fetch('config/validalogin.php', {
            method: 'POST',
            body: datos
        }).then(Response => Response.json())
        .then(datos =>{
            console.log(datos);

        });
    }

    button.addEventListener('submit',(e)=>{
        e.preventDefault();

        data();
    })

})


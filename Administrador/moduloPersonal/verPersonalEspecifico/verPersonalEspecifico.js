const titulo = document.querySelector('.titulo');
const nombrePersonal = document.querySelector('.nombre');
const tipoPersonal = document.querySelector('.tipoPersonal');
const correoPersonal = document.querySelector('.correo');
const passwordPersonal = document.querySelector('.password');
const seguroSocialPersonal = document.querySelector('.seguroSocial');
const btnVolver = document.querySelector('.volver');
const btnModificar = document.querySelector('.modificar');
var obtenerUsuarioEspecífico = new FormData();


window.addEventListener('load', e => {
    obtenerUsuarioEspecífico.append("personalID",localStorage.getItem("personalID"));
    fetch('../backendModuloPersonal/obtenerPersonalEspecifico.php' , {
        method:'POST', body:obtenerUsuarioEspecífico
    }).then(function(response){
        if(response.ok){
         return response.json();
        } else {
            throw "Error en la llamada Ajax"
        }
    }).then(function(infoPersonal){
        console.log(infoPersonal);
        for(element of infoPersonal){
            titulo.textContent = "Mostrando la información de " + element.Personal_Nombre;
            nombrePersonal.textContent = "Nombre: " + element.Personal_Nombre + " " + 
            element.Personal_APaterno + " " + element.Personal_AMaterno;
            tipoPersonal.textContent = "Tipo de personal: " + element.Personal_Tipo;
            correoPersonal.textContent = "Correo: " + element.Personal_Correo;
            passwordPersonal.textContent = "Contraseña: " + element.Personal_Contrasena;
            seguroSocialPersonal.textContent = "Número de seguridad social: " + element.Personal_Seguro;
        }
    })
})


btnVolver.addEventListener('click', e=>{
    window.location.href = "http://localhost/Buhitel/Administrador/moduloPersonal/vistaGeneralUsuarios/vistaGeneralUsuarios.php";
})



btnModificar.addEventListener('click', e =>{
    window.location.href="http://localhost/Buhitel/Administrador/moduloPersonal/modificarPersonal/modificarPersonal.php";
})
const formulario = document.getElementById('formulario');    //Ubicacion del id formuario principal 
const inputs = document.querySelectorAll('#formulario input');  // Buscar los inputs dentro del formulario
// const input = document.querySelectorAll('#formulario selectores');  // Buscar los inputs dentro del formulario



const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}


const validarFormulario =(e) =>{
    console.log(e.target.naem);
}

inputs.forEach((input)=>{
    input.addEventListener('keyup',validarFormulario()); //El evento keyup se envía a un elemento cuando el usuario suelta una tecla en el teclado. 
    input.addEventListener('blur',validarFormulario()); //El evento blur es disparado cuando un elemento ha perdido su foco
    
});


/*
//quiero que por cada inputs me ejecutes un codigo, ejecutamos una funcion después
inputs.forEach((input)=>{
    input.addEventListener('keyup',()=> {
        console.log('tecla levantada');
    });
} ); // KEYUP ES el usuario cuando presiona una tecla cuando la levanta se ejecuta un codigo 
*/
// envio y renovacion de los campos ( es un escuchador que indica al navegador que este atento a la interacción del usuario)
// "e" => Evento
formulario.addEventListener('submit',(e)=> {
    e.preventDefault();
})
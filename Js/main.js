const toggleBar=document.getElementById("toggleBar");

const liToggle = document.querySelector("nav > ul ");
console.log(liToggle);

liToggle.addEventListener("click", ()=>{
    toggleBar.classList.toggle("active");
})

$(document).ready(function() {
    // Manejar el clic en los botones de materias disponibles
    $('.materia-disponible').click(function() {
        // Obtener el nombre de la materia
        var nombreMateria = $(this).data('nombre-materia');
        
        // Aquí puedes realizar acciones con el nombre de la materia, como mostrarlo en otro lugar o realizar alguna acción específica
        console.log('Materia seleccionada: ' + nombreMateria);
        
    
        
        // Luego, puedes mover la materia a la sección de Materias Inscritas
        $(this).removeClass('materia-disponible').addClass('materia-inscrita');
        $('#tabla-materias-inscritas tbody').append($(this).clone());
    });
    
    // Manejar el clic en los botones de Materias Inscritas (para darse de baja)
    $('.materia-inscrita').click(function() {
        // Obtener el nombre de la materia
        var nombreMateria = $(this).data('nombre-materia');
        
        // Aquí puedes realizar acciones con el nombre de la materia inscrita, como mostrarlo en otro lugar o realizar alguna acción específica
        console.log('Darse de baja de la materia: ' + nombreMateria);
    
        
        // Luego, puedes mover la materia de regreso a la sección de Materias Disponibles
        $(this).removeClass('materia-inscrita').addClass('materia-disponible');
        $('#tabla-materias-disponibles tbody').append($(this).clone());
    });
});






//Vamos a realizar la petición para eliminar al usuario e inicializar la DataTable
new DataTable('#tblUsuarios');

//Creamos una función del evento onclick para eliminar al usuario
function aceptar_borrado(id_usuario) {
    Swal.fire({
        title: '¿Deseas eliminar a este usuario?',
        text: "¡No podrás restablecerlo próximamente!",
        icon: 'warning',
        showDenyButton: true,
        confirmButtonColor: '#14A44D',
        denyButtonColor: '#C51162',
        confirmButtonText: '<i class="bi bi-trash-fill" style="margin-right:7.5px;"></i>Eliminar usuario',
        denyButtonText: '<i class="bi bi-x-circle-fill" style="margin-right:7.5px;"></i>No eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
            procesar_eliminacion(id_usuario)
        } else if (result.isDenied) {
            Swal.fire("Eliminación cancelada", "El proceso de borrado se canceló", "info");
        }
    });
}

//Creamos la función para realizar la petición de Ajax para eliminar al usuario
function procesar_eliminacion(id_usuario) {
    parametro = { id: id_usuario };
    //Hacemos la petición de Ajax para la eliminación
    $.ajax({
        data: parametro,
        url: "back-eliminar.php",
        type: "POST",
        beforeSend: function() {},
        success: function() {
            Swal.fire(
                "¡Usuario eliminado!",
                "El usuario fue eliminado con éxito",
                "success"
            ).then((result) => {
                window.location.href = 'pagina-inicio.php';
                $('#tblUsuarios').load("pagina-inicio.php");
            });
        },
    });
}
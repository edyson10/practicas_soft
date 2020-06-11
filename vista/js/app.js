$(document).ready(function() {
    $('#dataTable').DataTable({
        'language': {
            paginate: {
                next: 'Siguiente',
                previous: 'Anterior',
                last: 'Último',
                first: 'Primero'
            },
            info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
            emptyTable: 'No hay registros',
            infoEmpty: '0 Registros',
            search: 'Buscar: ',
            lengthMenu: "Mostrar _MENU_ Entradas",
            infoFiltered: "(Filtrado de _MAX_ total entradas)"
        }
    });
});
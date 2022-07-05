var tabla= document.querySelector("#tabla");
var dataTable = new DataTable(tabla,{
    perPage:3,
    perPageSelect:[3,4,7],
    labels: {
        placeholder: "BUSCAR...",
        perPage: "{select} Limitación de registros",
        noRows: "No se encontraron registros",
        info: "Mostrando {start} a {end} de {rows} encontradas",
    }

});
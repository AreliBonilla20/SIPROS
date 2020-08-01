///////////////////////////////////////////////////////////Para vistas de nueva y editar institucion////////////////////////

//Actualizar departamentos de acuerdo a la región
$("#id_region").change(event => {
    $.get(`/departamentos/${event.target.value}`, function(res, sta){
        $("#id_departamento").empty();
        $("#id_departamento").append(`<option value="" disabled selected hidden>-Seleccione un departamento-</option>`);
        res.forEach(element => {
            $("#id_departamento").append(`<option value=${element.id}> ${element.nombre_departamento} </option>`);
        });
        $('.selectpicker').selectpicker('refresh');
    });

    //Para resetear tambien el select de municipios
    $("#id_municipio").empty();
    $("#id_municipio").append(`<option value="" disabled selected hidden>-Seleccione un municipio-</option>`);
    $('#id_municipio').val('');
});

//Actualizar municipios de acuerdo al departamento
$("#id_departamento").change(event => {
    $.get(`/municipios/${event.target.value}`, function(res, sta){
        $("#id_municipio").empty();
        $("#id_municipio").append(`<option value="" disabled selected hidden>-Seleccione un municipio-</option>`);
        res.forEach(element => {
            $("#id_municipio").append(`<option value=${element.id}> ${element.nombre_municipio} </option>`);
        });
        $('.selectpicker').selectpicker('refresh');
    });
});



///////////////////////////////////////////////////////////Para vistas de nuevo y editar expediente/////////////////////////

//Actualizar municipios de acuerdo al departamento
$("#departamento_id").change(event => {
    $.get(`/municipios/${event.target.value}`, function(res, sta){
        $("#municipio_id").empty();
        $("#municipio_id").append(`<option value="" disabled selected hidden>-Seleccione un municipio-</option>`);
        res.forEach(element => {
            $("#municipio_id").append(`<option value=${element.id}> ${element.nombre_municipio} </option>`);
        });
        $('.selectpicker').selectpicker('refresh');
    });
});
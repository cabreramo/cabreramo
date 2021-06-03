$('document').ready(function(){
    $.post('datagrid.php', function(resultados){
        $('#datagrid').jsGrid({
            width: "100%", height: "400px", editing:true, sorting: true,
            paging:true,pageIndex:1, pageSize:10,  loadIndication: true,
            loadIndicationDelay: 500, confirmDeleting: true, deleteConfirm: "Favor de confirmar",

             // si se requiere tener un paginado, se activa pagePrevText:"Last",  pageNextText:"First",

            data: resultados,
            fields: [{name: "id_numviaje", type: "text", title: "No.Viaje", width: 50, validate:"requiered", align: "center"},
                    {name:"origen", type:"text", title:"Origen", width:60,align: "left"},
                    {name:"destino", type:"text", title:"Destino", width:60,align: "left"},
                    {name:"gasto_hotel", type:"number", title:"Gastos de hotel", width:50,align: "left"},
                    {name:"gasto_transporte", type:"number", title:"Gastos de transporte", width:50,align: "left"},
                    {name:"gasto_comida", type:"number", title:"Gastos de comida", width:50,align: "left"},
                    {name:"gastas_extras", type:"number", title:"Gastos extras", width:50,align: "left"},
                    {name:"fecha_inicio", type:"date", title:"fecha inicio", width:50,align: "center"},
                    {name:"fecha_fin", type:"date", title:"fecha fin", width:50,align: "center"},
                    {type:"control"}]
        });
    },'json');
});
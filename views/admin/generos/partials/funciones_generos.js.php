<script>
    var modoEditor;

    function mostrarFormAlta(){
        modoEditor = 'alta';

        $('#a').val("add");
        $('#id').val("");
        $('#nombre').val("");
        $('#descripcion').val("");

        $('.modal-title').text("Nuevo género");
    }

    function mostrarFormModificar(id){
        modoEditor = 'modificar';

        $('#a').val("edit");
        $('#id').val(id);
        $('#nombre').val( ($("#"+id+" td" )[1]).innerHTML );

        
        $('.modal-title').text("Modificar género");
    }

</script>
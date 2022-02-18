$(document).ready(()=>{
    $('#form_contenido').keyup(updateCount);
    $('#form_contenido').keydown(updateCount);
    function updateCount() {
        var cs = $(this).val().length;
        $('#characters').text(cs);
}
    
})
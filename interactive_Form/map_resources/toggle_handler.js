
//existing
$(document).ready(function() {
    $('#crashesSwitch').on('click', function(){
    if ( $(this).is(':checked') ) {
        pm26Data();
    } 
    else {
        clearMetadata("points");
    }
    });
});

$(document).ready(function() {
    $('#pavementCondSwitch').on('click', function(){
    if ( $(this).is(':checked') ) {
        pavementCond();
    } 
    else {
        clearMetadata("lines");
    }
    });
});
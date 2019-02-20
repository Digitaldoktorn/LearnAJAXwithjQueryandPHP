$(document).ready(function(){

    $('#form-new').submit(function(event){
        event.preventDefault();

        var form = $(this);
        var data = form.serialize();
        // var task = $('#task').val();

        // console.log(task);

        $.ajax({

           url: 'log.php',
            data: data

        });
        
    });

});
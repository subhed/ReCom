$(document).ready(function() { 
    $(".cmt_btn").click(function() { 
        var c = this.id;

        var idc = "cmt"+c;
        alert(idc);
        var x = $("#"+idc).serializeArray(); 

        $.each(x, function(i, field) { 
            alert(field.name + ":" 
            + field.value + " ");

            // $("#output").append(field.name + ":" 
            //         + field.value + " "); 
        }); 
    }); 
});
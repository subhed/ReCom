$(document).ready(function() { 
    $(".cmt_btn").click(function() { 
        var t = this;
        var c = document.querySelector('.c  mt_btn').id

        var idc = "cmt"+c;
        alert(c);

        var x = $("#"+idc).serializeArray(); 
        $.each(x, function(i, field) { 
            alert(field.name + ":" 
            + field.value + " ");

            $("#output").append(field.name + ":" 
                    + field.value + " "); 
        }); 
    }); 
});
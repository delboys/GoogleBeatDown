
class Login {

    constructor() {

    }
    debug(){
        alert("witns");
    }
    ajaxLogin(formID) {
        
        $("#".formID).serialize();
        
        return  $.ajax({
            url: '/application/login',
            dataType: 'text',
            type: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            async: true,
            data: {},
            success: function (data, textStatus, jQxhr) {
                alert(data);//debuging
            },
            error: function (jqXhr, textStatus, errorThrown) {
                console.log(textStatus);
                console.log(jqXhr);

            }
        });
    }
}
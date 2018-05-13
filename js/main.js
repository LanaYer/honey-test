function addComment () {

    var valid = true;
    var email = $("#formEmail").val();
    var name = $("#formName").val();
    var text = $("#formText").val();

    if (!(email.includes('@')&& email.includes('.'))){
        valid = false;
        alert('Проверьте корректность заполнения поля e-mail!');
    }

    if (!(email&&name&&text)){
        valid = false;
        alert('Заполнены не все поля!');
    }

    if (valid){
        $.ajax({
            type: "POST",
            data:{
                'name': name,
                'email': email,
                'comment': text
            },
            url: "ajax/add_comment.php",
            async: true,
            success: function(data){
                if (data) {
                    location.reload();
                }
            }
        });
    }
}
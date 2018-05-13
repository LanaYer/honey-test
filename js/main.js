function addComment () {

    $.ajax({
        type: "POST",
        data:{
            'name': $("#formName").val(),
            'email': $("#formEmail").val(),
            'comment': $("#formText").val()
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
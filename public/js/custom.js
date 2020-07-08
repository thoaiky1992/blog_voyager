
window.onload = function (){
    let list = document.getElementsByClassName('banner_redirect');
    for(let i = 0 ; i < list.length ; i++){
        list[i].addEventListener('click',function(){
            let slug = list[i].getAttribute('data-slug');
            window.location.href = '/post/' + slug;
        })
    }
    $('.submit_subscribe').on('click',function(){
        let email = $('#email_subscribe').val();

        $.ajax({
            url : 'http://blog.kysmile.tk/create-subscribe',
            type : 'GET',
            data : { email : email },
            dataType : 'JSON',
            success : function (data){
                swal({
                    title: data.message,
                    icon: "success",
                    button: "Đóng",
                });
            },
            error: function (res) {
                swal({
                    title: res.responseJSON.errors.email[0],
                    icon: "error",
                    button: "Đóng",
                });
            }
        })

    })
}



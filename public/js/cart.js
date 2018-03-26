$(document).ready(function () {
    $(".upCart").click(function(e){
        e.preventDefault();
        var rowid = $(this).attr('id');
        var qty = $(this).parent().find('.qty').val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url:'updateCart/'+ rowid + ,
            type:'GET',
            cache:false,
            data:{"_token":token, "rowid":rowid, "qty":qty},
            success:function(data){
            console.log(data);
               if(data == "ok"){
                  window.location="cart";
                }
            }
        });
    });
});

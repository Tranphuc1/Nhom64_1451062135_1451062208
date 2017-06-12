function responsivePHP(){
	$.ajax({
                    url : "dologin.php",
                    type : "post",
                    dataType:"text",
                    data : {
                       uid: $('#login').val()
                    },
                    success : function (result){
                        $('#result')localhost:8888/btl/index.html(result);
                        // window.location="http://dantri.com.vn";
                        setTimeout("location.href = 'localhost:8888/btl/index.html';",1500);
                    }
                });
}

  function submitData(){
   
      var data = {
       
        username: $("#username").val(),
        
        password: $("#password").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: './php/login.php?',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Login Successful"){
           // window.location.reload();
           window.location.href="./profile.html"
          }
        }
      });

  }




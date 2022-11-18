


  function submitData(){
   
        //alert("jdh");
        var data = {
        name: $("#name").val(),
        username: $("#username").val(),
        DOB: $("#birthday").val(),
        Gender: $("#val").val(),
        Age: $("#age").val(),
        Contact: $("#contact").val(),
        Address: $("#address").val(),
        password: $("#password").val(),
        action: $("#action").val(),
      };
    
      $.ajax({
        url: './php/register.php?',
        type: 'post',
        data: data,
        success:function(response)
        {
         // alert(response);
          if(response == "Registration Successful")
            {
             //alert(response);
               window.location.href="./login.html"
              // window.location.reload();
            }
        //alert("hh");
        }
        , 
        error: function(e) {
            console.log('error',e)
        }
      });
   
  }

function submitData()
$(document).ready(function(){
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
      url: './php/profile.php',
      type: 'post',
      data: data,
      success:function(response){
        //alert("ajhsj");
       var profile_form= JSON.parse(response);
       alert(profile_form);
      }
    });
  });
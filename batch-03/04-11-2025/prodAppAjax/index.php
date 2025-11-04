<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>AJAX DEMO</h1>
      <hr/>
       <div>
  <h2>Welcome back</h2>
  <form>
    <input type="text" id="name" name="username" placeholder="Username" >
    <input type="password" id="password" name="password" placeholder="Password" >
    <button type="submit">Login</button>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
      $('form').on("submit",function(e){
        //Prevent default form submission
        e.preventDefault();
        //collect the formdata
        let uname = $('#name').val();
        let pwd = $('#password').val();
        //AJAX call
        $.ajax({
          url:'server_action/process_login.php',
          type:'POST',
          data:{username:uname, password:pwd},
          success:function(message){
                alert(message);
                window.location.href='dashboard.php';
            },
          error:errorHandler
        });
      });
  });
  // function successHandler(message){
  //   alert(message);
  // }
  function errorHandler(error){
    alert("Some error occurred: "+error);
  }
</script>
</body>
</html>
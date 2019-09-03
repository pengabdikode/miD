@extends('layouts.master')

@section('title','Contact')

@section('content')
    <div class="Contact-selection">
      <h1>Creat account</h1>
      <div class="border"></div>
      <form class="contact-form" action="singup.html" method="post">
        <input type="text" class="Contact-form-text" placeholder="Username">
        <input type="email" class="Contact-form-text" placeholder="Your email">
        <input type="password" id="password" class="Contact-form-text" placeholder="Password">
        <input type="password" id="repassword" class="Contact-form-text" placeholder="repassword">
        <input type="submit" name="" value="NEXT">
      </form>
    </div>
<script>
      function clickme(){
          document.getElementById('helo').innerHTML='berlasih';
      }
      var password = document.getElementById("password"), repassword = document.getElementById("repassword");
      function validatePassword(){
      if(password.value != repassword.value){
          repassword.setCustomValidity("tidak sama");
      } else{ 
      repassword.setCustomValidity('');    
      }
  }
  
  password.onchange =validatePassword;
  repassword.onkeyup = validatePassword;
  </script>
  </body>
</html>

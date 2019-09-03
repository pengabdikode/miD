@extends('layouts.master')

@section('title','Contact')

@section('signin')
    
<form class="box" action="ada.html" method="post">
    <h1>Login</h1>
    <input type="text" name="" placeholder="Username">
    <input type="password" name="" placeholder="password">
    <input type="submit" name="" value="Login">
    <div class="bottom-text">
      Don't have account? <a href="singup.html">Sing up</a>
 </form>
 @endsection
@extends('layout/master')

@section('maincontent')
<div class="container">
<form class="loginform" action="login" method="post">
    <div class="form-group" >
      <label for="exampleInputEmail1">아이디</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID" name="userid">
      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" name="userid">비밀번호</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">로그인</button>
  </form>
</div>

@endsection
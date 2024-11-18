@extends('header')
@section('content')
<form action="{{route('signup')}}" method="post">
@csrf
  <div class="mb-3">
    <label for="full_name" class="form-label">ФИО</label>
    <input type="text" class="form-control" id="full_name" name="full_name">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Телефон</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Почта</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="login" class="form-label">Логин</label>
    <input type="text" class="form-control" id="login" name="login">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</form>
@endsection
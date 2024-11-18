@extends('header')
@section('content')
<form action="{{route('signup')}}" method="post">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Тип услуги</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Дату и время выполнения</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Адрес объекта</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Оставить заявку</button>
</form>
@endsection
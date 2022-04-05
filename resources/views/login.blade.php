@extends('SP.main_SP')

@section('title')
Сертекс ДВ || Авторизация
@endsection

@section('content')
<div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
  @if(session('alert')) 
  @include('module_SP.alert')
@endif
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h2 class="fw-bold mb-0">Войти на сайт Low kik</h2>
      </div>
      <div class="modal-body p-5 pt-0">
        <form class="" method="POST">
        @csrf

        <div class="form-floating mb-3">
          <input type="text" name="login" class="form-control rounded-4" id="login-form-register" placeholder="login">
          <label for="floatingInput">
            Login
          </label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control rounded-4" id="password-form-register" placeholder="Password">
          <label for="floatingPassword">
            Password
          </label>
        </div>
          <button class="w-100 mt-2 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Войти</button>
      </div>
    </div>
  </div>
</div>
@endsection

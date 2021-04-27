@extends('layout')
@section('title', 'Регистрация')

@section('content')
<div class="container  mt-4">
    <h2 class="text-center ">Регистрация</h2>
    <div class="d-flex justify-content-center">
        <form class="cols col-lg-5" action="/registration" method="post">
            @csrf
            <label class="form-label mt-2" for="fio">ФИО</label>
            <input class="form-control " type="text" name="fio" required>

            <label class="form-label mt-2" for="login">Логин</label>
            <input class="form-control " type="text" name="login" required>

           <label class="form-label mt-2" for="email">Email</label>
            <input class="form-control" type="email" name="email" required>

            <label class="form-label mt-2" for="password">Пароль</label>
            <input class="form-control" type="password" name="password" required>

            <label class="form-label mt-2" for="confirm_password">Подтверждение пароля</label>
            <input class="form-control" type="password" name="confirm_password" required>
            <div class="d-flex mt-3">
            <label for="check">Подтверждение на обработку персональных данных</label>
            <input class="form-check-input mx-3 " type="checkbox" value="1" name="check required"
            >
            </div>
            <div class="d-flex justify-content-center my-3">
                <input class="btn btn-primary" type="submit" value="Зарегестрироваться">
            </div>
        </form>
    </div>
</div>
@endsection

@extends('layout')
@section('title','Авторизация')

@section('content')
    <div class="container  mt-4">
        <h2 class="text-center ">Авторизация</h2>
        <div class="d-flex justify-content-center">
            <form class="cols col-lg-3" action="/login" method="post">
                @csrf
                <label class="form-label mt-2" for="login">Логин</label>
                <input class="form-control " type="text" name="login" required>

                <label class="form-label mt-2" for="password">Пароль</label>
                <input class="form-control" type="password" name="password" required>

                <div class="d-flex justify-content-center my-3">
                    <input class="btn btn-primary" type="submit" value="Войти">
                </div>
            </form>
        </div>
    </div>
@endsection

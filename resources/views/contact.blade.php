@extends('layouts.app')

@section('title')
    Страница контактов
@endsection

@section('content')
<h1>Страница контактов</h1>

<form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" name="name" id="name" placeholder="Имя" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Введите email</label>
        <input type="text" name="email" id="email" placeholder="Email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">Введите тему сообщения</label>
        <input type="text" name="subject" id="subject" placeholder="Тема сообщения" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Введите сообщение</label>
        <textarea name="message" id="message" placeholder="Сообщение" class="form-control"></textarea>
    </div>
    
    <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection
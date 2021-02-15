@extends('layouts.app')

@section('title')
    Обновление записи
@endsection

@section('content')
<h1>Обновление записи</h1>



<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf

    @include('inc.messages')

    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" name="name" id="name" placeholder="Имя" class="form-control" value="{{ $data->name }}">
    </div>

    <div class="form-group">
        <label for="email">Введите email</label>
        <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="{{ $data->email }}">
    </div>

    <div class="form-group">
        <label for="subject">Введите тему сообщения</label>
        <input type="text" name="subject" id="subject" placeholder="Тема сообщения" class="form-control" value="{{ $data->subject }}">
    </div>

    <div class="form-group">
        <label for="message">Введите сообщение</label>
        <textarea name="message" id="message" placeholder="Сообщение" class="form-control">{{ $data->message }}</textarea>
    </div>
    
    <button type="submit" class="btn btn-success">Обновить</button>
</form>
@endsection
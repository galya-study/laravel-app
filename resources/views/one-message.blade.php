@extends('layouts.app')

@section('title')
    {{ $data->subjest }}
@endsection

@section('content')
    <h1>{{ $data->subjest }}</h1>
    <div class="alert alert-info">
        <p>{{ $data->message }}</p>
        <p>{{ $data->email }} - {{ $data->name }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn bnt-primary">Редактировать</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn bnt-danger">Удалить</button></a>
    </div>
@endsection
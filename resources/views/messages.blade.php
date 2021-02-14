@extends('layouts.app')

@section('title')
    Все сообщения
@endsection

@section('content')
    <h1>Все сообщения</h1>
    @foreach ($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href=""><button class="btn bnt-warning">Детальнее</button></a>
        </div>
    @endforeach
@endsection
@extends('layouts.default')

@section('content')
    <h2>Контакты</h2>
    <p>Адрес {{ $address }}</p>
    <p>Почтовый код {{ $post_code }}</p>
    @if (empty($email))
        <p>Адрес электронной почты не указан</p>
    @else
        <p>Email {{ $email }}</p>
    @endif
    <p>Телефон {{ $phone }}</p>
@endsection

@extends('SP.main_SP')

@section('title')
    Сертекс ДВ || Товар
@endsection

@section('content')
    <div class="mt-5 d-flex justify-content-center">
        @include('SP.tovar_SP',[
        'name_tovar' => $obj_tovar[0]['name_tovar'],
        'img_tovar' => $obj_tovar[0]['img_tovar'],
        'text_tovar' => $obj_tovar[0]['text_tovar'],
        'price_tovar' => $obj_tovar[0]['price_tovar']
        ])
    </div>
@endsection
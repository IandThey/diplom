@extends('SP.main_SP')

@section('title')
    Сертекс ДВ || Католог ГО || Товары
@endsection

@section('content')
<div class="cars-container">
  <div class="container-xxl" id="container-cars">

    <div class="row">
        <hr>
            <div class="col-12 d-flex flex-wrap justify-content-center">
                <h1>Товары</h1>
            </div>
        <hr>
    </div>

    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 g-4 my-0 cars" id="cars">
        @foreach ($tovar as $elem)
            @include('SP.G_tovars_SP',[
                'name_tovar' => $elem['name_tovar'],
                'a_tovar' => $elem['a_tovar'],
                'img_tovar' => $elem['img_tovar'],
                'price_tovar' => $elem['price_tovar'],
            ])
        @endforeach
    </div>
    
  </div>
</div>
@endsection
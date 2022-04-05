@extends('SP.main_SP')

@section('title')
    Сертекс ДВ || Католог ГО
@endsection

@section('content')
<div class="cars-container">
  <div class="container-xxl" id="container-cars">
    <div class="row">
        <hr>
            <div class="col-12 d-flex flex-wrap justify-content-center">
                <h1>Грузоподъемное оборудование</h1>
            </div>
        <hr>
    </div>

    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 g-4 my-0 cars" id="cars">
        @foreach ($katalog as $elem)
            @include('SP.razdel_SP',[
                'name_razdel' => $elem['name_razdel'],
                'a_razdel' => $elem['a_razdel'],
                'img_razdel' => $elem['img_razdel'],
                'text_razdel' => $elem['text_razdel']
            ])
        @endforeach
    </div>
  </div>
</div>
@endsection
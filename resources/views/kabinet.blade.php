@extends('SP.main_SP')

@section('title')
  Сертекс ДВ || Кабинет
@endsection

@section('content')
@foreach ($mass as $item)
<main class="px-3">
    <h1>{{ $item['name'] }}</h1>
    <p class="lead">{{ $item['price'] }}</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
    </p>
</main>
@endforeach
@endsection

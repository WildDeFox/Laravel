@extends('layouts.main')
@section('content')
    <div class="row mb-2">
        @foreach ($newsList as $news)
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Мир</strong>
                    <h3 class="mb-0">{{ $news['title'] }}</h3>
                    <div class="mb-1 text-muted">{{$news['create_at']}}</div>
                    <p class="card-text mb-auto">{{ $news['description'] }}</p>
                    <a href="{{route('news.show', ['id' => $news['id']])}}" class="stretched-link">Продолжить чтение</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Эскиз" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Эскиз</text></svg>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

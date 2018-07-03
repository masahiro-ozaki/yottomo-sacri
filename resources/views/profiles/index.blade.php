@extends('layouts.app')

@section('content')

    <h1>yottomo一覧</h1>

    @if (count($profiles) > 0)
        <ul>
            @foreach ($profiles as $profile)
                <li>{!! link_to_route('profiles.show', $profile->id, ['id' => $profile->id]) !!} : {{ $profile->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('profiles.create', '新規メッセージの投稿') !!}

@endsection
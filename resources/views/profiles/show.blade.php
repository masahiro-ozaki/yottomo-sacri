@extends('layouts.app')

@section('content')

    <h1>id = {{ $profile->id }} のyottomo詳細ページ</h1>

    <p>{{ $profile->content }}</p>
    
    {!! link_to_route('profiles.edit', 'このメッセージを編集', ['id' => $profile->id]) !!}
    
    {!! Form::model($profile, ['route' => ['profiles.destroy', $profile->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection
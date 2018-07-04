@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">

    <h1>ヨッ友一覧</h1>

    @if (count($profiles) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>名前</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                    <tr>
                        <td>{!! link_to_route('profiles.show', $profile->name, ['id' => $profile->id]) !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('profiles.create', 'ヨッ友の追加', null, ['class' => 'btn btn-primary']) !!}
    
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">

    <h1>{{ $profile->name }} の詳細ページ</h1>
    
    <table class="table table-striped">
        <tr>
            <th>ニックネーム(特徴でも可)</th>
            <td>{{ $profile->name }}</td>
        </tr>
        <tr>
            <th>性別</th>
            <td>{{ $profile->gender }}</td>
        </tr>
        <tr>
            <th>ホームチーム</th>
            <td>{{ $profile->birthplace }}</td>
        </tr>
        <tr>
            <th>はじめて会った場所</th>
            <td>{{ $profile->character1 }}</td>
        </tr>
        <tr>
            <th>はじめて会話した内容</th>
            <td>{{ $profile->character2 }}</td>
        </tr>
        <tr>
            <th>その他</th>
            <td>{{ $profile->content }}</td>
        </tr>
    </table>
    <!--<p>-->
    <!--   私は[{{ $profile->birthday }}]生まれで、出身地は[{{ $profile->birthplace }}]だよ。<br>-->
    <!--   性格は[{{ $profile->character1 }}]と思っているんだけど、まわりからは[{{ $profile->character2 }}]って言われるよ。<br>-->
    <!--   そんな私の趣味は、[{{ $profile->hobby }}]で、チャームポイントは[{{ $profile->charmpoint }}]なんだ。<br>-->
    <!--   将来の夢は[{{ $profile->dream }}]で、好きなアプリは[{{ $profile->app }}]だよ。<br>-->
    <!--   最後に一言、[{{ $profile->content }}]。よろしくね！-->
    <!--</p>-->
    <!--<p>-->
    <!--〇〇ランキング<br>-->
    <!--第一位:[{{ $profile->rank1 }}]<br>-->
    <!--第二位:[{{ $profile->rank2 }}]<br>-->
    <!--第三位:[{{ $profile->rank3 }}]-->
    <!--</p>-->
    
    {!! link_to_route('profiles.edit', 'このProfileを編集', ['id' => $profile->id], ['class' => 'btn btn-default']) !!}
    
    {!! Form::model($profile, ['route' => ['profiles.destroy', $profile->id], 'method' => 'delete']) !!}
        {!! Form::submit('もうズッ友！！', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
    </div>
</div>

@endsection
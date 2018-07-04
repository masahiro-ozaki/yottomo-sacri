@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">

    <h1>新しいヨッ友追加ページ</h1>

    {!! Form::model($profile, ['route' => 'profiles.store']) !!}
        
        <div class="form-group">
            {!! Form::label('name', 'ニックネーム(特徴でも可):') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('gender', '性別:') !!}
            {{ Form::select('gender', array(''=>'選択してください','男'=>'男','女'=>'女','その他'=>'その他') )}}
        </div>
        
        <div class="form-group">
            {!! Form::label('birthplace', 'ホームチーム:') !!}
            <!--<table class="table table-striped">-->
            <!--    <tr>-->
            <!--        <td>1-A</td>-->
            <!--        <td>{{ Form::radio('birthplace', '1-A') }}</td>-->
            <!--    </tr>-->
            <!--    <tr>-->
            <!--        <td>1-B</td>-->
            <!--        <td>{{ Form::radio('birthplace', '1-B') }}</td>-->
            <!--    </tr>-->
            <!--    <tr>-->
            <!--        <td>1-C</td>-->
            <!--        <td>{{ Form::radio('birthplace', '1-C') }}</td>-->
            <!--    </tr>-->
            <!--</table>-->
            {{ Form::select('birthplace', array(''=>'選択してください','1-A'=>'1-A','1-B'=>'1-B','1-C'=>'1-C','2-A'=>'2-A','2-B'=>'2-B','2-C'=>'2-C','3-A'=>'3-A','3-B'=>'3-B','3-C'=>'3-C','4-A'=>'4-A','4-B'=>'4-B','4-C'=>'4-C','5-A'=>'5-A','5-B'=>'5-B','5-C'=>'5-C','6-A'=>'6-A','6-B'=>'6-B','6-C'=>'6-C','7-A'=>'7-A','7-B'=>'7-B','7-C'=>'7-C','8-A'=>'8-A','8-B'=>'8-B','8-C'=>'8-C','9-A'=>'9-A','9-B'=>'9-B','9-C'=>'9-C','10-A'=>'10-A','10-B'=>'10-B','10-C'=>'10-C','11-A'=>'11-A','11-B'=>'11-B','11-C'=>'11-C','12-A'=>'12-A','12-B'=>'12-B','12-C'=>'12-C','13-A'=>'13-A','13-B'=>'13-B','13-C'=>'13-C','14-A'=>'14-A','14-B'=>'14-B','14-C'=>'14-C','15-A'=>'15-A','15-B'=>'15-B','15-C'=>'15-C') )}}
        </div>
        
        <div class="form-group">
            {!! Form::label('character1', 'はじめて会った場所:') !!}
            {!! Form::text('character1', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('character2', 'はじめて会話した内容:') !!}
            {!! Form::text('character2', null, ['class' => 'form-control']) !!}
        </div>
        
        <!--<div class="form-group">-->
        <!--私は-->
        <!--{!! Form::date('birthday', \Carbon\Carbon::now()) !!}-->
        <!--生まれで、出身地は-->
        <!--{!! Form::text('birthplace') !!}-->
        <!--だよ。<br>-->
        <!--性格は-->
        <!--{!! Form::text('character1') !!}-->
        <!--と思っているんだけど、まわりからは-->
        <!--{!! Form::text('character2') !!}-->
        <!--って言われるよ。<br>-->
        <!--そんな私の趣味は、-->
        <!--{!! Form::text('hobby') !!}-->
        <!--で、チャームポイントは-->
        <!--{!! Form::text('charmpoint') !!}-->
        <!--なんだ。<br>-->
        <!--将来の夢は-->
        <!--{!! Form::text('dream') !!}-->
        <!--で、好きなアプリは-->
        <!--{!! Form::text('app') !!}-->
        <!--だよ。<br>-->
        <!--最後に一言、-->
        <!--{!! Form::text('content') !!}-->
        <!--。よろしくね！-->
        <!--</div>-->
        
        <!--<div class="form-group">-->
        <!--〇〇ランキング<br>-->
        <!--{!! Form::label('rank1', '第一位:') !!}-->
        <!--{!! Form::text('rank1') !!}-->
        <!--<br>-->
        <!--{!! Form::label('rank2', '第二位:') !!}-->
        <!--{!! Form::text('rank2') !!}-->
        <!--<br>-->
        <!--{!! Form::label('rank3', '第三位:') !!}-->
        <!--{!! Form::text('rank3') !!}-->
        <!--</div>-->
        
        <div class="form-group">
            {!! Form::label('content', 'その他:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('追加', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    
    </div>
</div>

@endsection
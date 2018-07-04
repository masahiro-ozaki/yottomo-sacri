@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-6 col-xs-offset-3">

    <h1>{{ $profile->name }} の編集ページ</h1>

    {!! Form::model($profile, ['route' => ['profiles.update', $profile->id], 'method' => 'put']) !!}
        
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A</td>
                        <td>{{ Form::radio('birthplace', '1-A') }}</td>
                        <td>{{ Form::radio('birthplace', '2-A') }}</td>
                        <td>{{ Form::radio('birthplace', '3-A') }}</td>
                        <td>{{ Form::radio('birthplace', '4-A') }}</td>
                        <td>{{ Form::radio('birthplace', '5-A') }}</td>
                        <td>{{ Form::radio('birthplace', '6-A') }}</td>
                        <td>{{ Form::radio('birthplace', '7-A') }}</td>
                        <td>{{ Form::radio('birthplace', '8-A') }}</td>
                        <td>{{ Form::radio('birthplace', '9-A') }}</td>
                        <td>{{ Form::radio('birthplace', '10-A') }}</td>
                        <td>{{ Form::radio('birthplace', '11-A') }}</td>
                        <td>{{ Form::radio('birthplace', '12-A') }}</td>
                        <td>{{ Form::radio('birthplace', '13-A') }}</td>
                        <td>{{ Form::radio('birthplace', '14-A') }}</td>
                        <td>{{ Form::radio('birthplace', '15-A') }}</td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>{{ Form::radio('birthplace', '1-B') }}</td>
                        <td>{{ Form::radio('birthplace', '2-B') }}</td>
                        <td>{{ Form::radio('birthplace', '3-B') }}</td>
                        <td>{{ Form::radio('birthplace', '4-B') }}</td>
                        <td>{{ Form::radio('birthplace', '5-B') }}</td>
                        <td>{{ Form::radio('birthplace', '6-B') }}</td>
                        <td>{{ Form::radio('birthplace', '7-B') }}</td>
                        <td>{{ Form::radio('birthplace', '8-B') }}</td>
                        <td>{{ Form::radio('birthplace', '9-B') }}</td>
                        <td>{{ Form::radio('birthplace', '10-B') }}</td>
                        <td>{{ Form::radio('birthplace', '11-B') }}</td>
                        <td>{{ Form::radio('birthplace', '12-B') }}</td>
                        <td>{{ Form::radio('birthplace', '13-B') }}</td>
                        <td>{{ Form::radio('birthplace', '14-B') }}</td>
                        <td>{{ Form::radio('birthplace', '15-B') }}</td>
                    </tr>
                    <tr>
                        <td>C</td>
                        <td>{{ Form::radio('birthplace', '1-C') }}</td>
                        <td>{{ Form::radio('birthplace', '2-C') }}</td>
                        <td>{{ Form::radio('birthplace', '3-C') }}</td>
                        <td>{{ Form::radio('birthplace', '4-C') }}</td>
                        <td>{{ Form::radio('birthplace', '5-C') }}</td>
                        <td>{{ Form::radio('birthplace', '6-C') }}</td>
                        <td>{{ Form::radio('birthplace', '7-C') }}</td>
                        <td>{{ Form::radio('birthplace', '8-C') }}</td>
                        <td>{{ Form::radio('birthplace', '9-C') }}</td>
                        <td>{{ Form::radio('birthplace', '10-C') }}</td>
                        <td>{{ Form::radio('birthplace', '11-C') }}</td>
                        <td>{{ Form::radio('birthplace', '12-C') }}</td>
                        <td>{{ Form::radio('birthplace', '13-C') }}</td>
                        <td>{{ Form::radio('birthplace', '14-C') }}</td>
                        <td>{{ Form::radio('birthplace', '15-C') }}</td>
                    </tr>
                </tbody>
                <!--<tr>-->
                <!--    <td>1-A</td>-->
                <!--    <td>{{ Form::radio('birthplace', '1-A') }}</td>-->
                <!--</tr>-->
                <!--<tr>-->
                <!--    <td>1-B</td>-->
                <!--    <td>{{ Form::radio('birthplace', '1-B') }}</td>-->
                <!--</tr>-->
                <!--<tr>-->
                <!--    <td>1-C</td>-->
                <!--    <td>{{ Form::radio('birthplace', '1-C') }}</td>-->
                <!--</tr>-->
            </table>
            <!--{{ Form::select('birthplace', array(''=>'選択してください','1-A'=>'1-A','1-B'=>'1-B','1-C'=>'1-C','2-A'=>'2-A','2-B'=>'2-B','2-C'=>'2-C','3-A'=>'3-A','3-B'=>'3-B','3-C'=>'3-C','4-A'=>'4-A','4-B'=>'4-B','4-C'=>'4-C','5-A'=>'5-A','5-B'=>'5-B','5-C'=>'5-C','6-A'=>'6-A','6-B'=>'6-B','6-C'=>'6-C','7-A'=>'7-A','7-B'=>'7-B','7-C'=>'7-C','8-A'=>'8-A','8-B'=>'8-B','8-C'=>'8-C','9-A'=>'9-A','9-B'=>'9-B','9-C'=>'9-C','10-A'=>'10-A','10-B'=>'10-B','10-C'=>'10-C','11-A'=>'11-A','11-B'=>'11-B','11-C'=>'11-C','12-A'=>'12-A','12-B'=>'12-B','12-C'=>'12-C','13-A'=>'13-A','13-B'=>'13-B','13-C'=>'13-C','14-A'=>'14-A','14-B'=>'14-B','14-C'=>'14-C','15-A'=>'15-A','15-B'=>'15-B','15-C'=>'15-C') )}}-->
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

        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
    
    </div>
</div>

@endsection
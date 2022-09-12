@extends('melancholy.layout')
@section('title',"自己評価式抑うつ性尺度")
 


@section('contents')

<div class='main'>    
    <div class="container-anser">
        <h1> 採点結果...</h1>
        <h2>{{$anser}}　points</h2>
    </div>
  
    <br>

    @if($anser>65)
    <p>【４０点未満】抑うつ性は乏しい　【４０点台】軽度抑うつ性あり　【<span>５０点以上</span>】中等度以上の抑うつ性あり</p>
    <div class="messege">
            <h1 class="line">心が壊れかけています。</h1>
            <p>大変でしたね。</p>
            <p>どうかゆっくりお休みになって下さい。</p>
    </div>
    <br>
    @elseif($anser>=50) 
    <p>【４０点未満】抑うつ性は乏しい　【４０点台】軽度抑うつ性あり　【<span>５０点以上</span>】中等度以上の抑うつ性あり</p>
    <div class="messege">
            <h1 class="line">心が疲れているようです。</h1>
            <p>毎日お疲れ様です。</p>
            <p>たまには休む事も大事ですよ。</p>
    </div>
    @elseif($anser>=40)
    <p>【４０点未満】抑うつ性は乏しい　【<span>４０点台</span>】軽度抑うつ性あり　【５０点以上】中等度以上の抑うつ性あり</p>
    <div class="messege">
        <h1 class="line">少しお疲れ気味の様ですね。</h1>
        <p>軽く深呼吸してみましょう。</p>
        <p>あまり無理をしないようにして下さいね。</p>
    </div>
    @else 
    <p>【<span>４０点未満</span>】抑うつ性は乏しい　【４０点台】軽度抑うつ性あり　【５０点以上】中等度以上の抑うつ性あり</p>
    <div class="messege">
        <h1 class="line">検査結果は合格です！</h1>
        <p>元気良く行きましょう！</p>
        <p>また、チェックしに来て下さいね！</p>
    </div>
    @endif

</div>
  
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/anser.css')}}">
@endsection
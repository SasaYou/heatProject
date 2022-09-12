@extends('melancholy.layout')
@section('title',"心のテスト")
    
@section('contents')

    
    <div class='main'>    
        <h1 class="title"> 自己評価式抑うつ性尺度</h1>
        <h4>出題される問題に答え、憂うつ度を測りましょう!</h4>
        <p class='x'>自己評価式抑うつ性尺度（SDS）とは</p>
        <p><span>S</span>elf-rating <span>D</span>epression <span>S</span>cale</p>
            うつ性自己評価尺度を意味します。
        
<br>
<br>
        <p>出題される20問の問いに答えることで、うつの症状の程度を推測することが出来ます。</p>
        <p>国内にある多くの心療内科で広く用いられており、憂鬱感や疲れやすさ、入眠障害など、</p>
        <p>被験者の抑うつ性の程度を見るためのセルフチェックによる心理検査です。</p>
        
        <br>
        <a class="button" href="/melancholy/check">テスト開始</a></div>
    

@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection
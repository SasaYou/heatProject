@extends('contact.layout')
@section('title','お問合せフォーム')

@section('contents')

<div class="main-container">
    <div class="container-title">お問合せ</div>
    <form action="" method="POST">
        @csrf
        <ul class="item-container">
            <li>
                <div class="item-contents">
                    <div class="item-title">お名前 :</div>
                    <div class="item-input">{{ $data->name}}</div>
                </div>
            </li>
            <li><div class="item-contents">
                    <div class="item-title">メールアドレス :</div>
                    <div class="item-input">{{$data->email }}</div>
                </div>
            </li>
            <li>
                <div class="item-contents">
                    <div class="item-title">内容 :</div>
                    <div class="item-input">{{ $data->contents}} </textarea></div> 
                </div>
            </li>
        </ul>
        <button type="submit" class="submit">送信</button>
    </form>
</div>

@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/contact/check.css')}}">
@endsection
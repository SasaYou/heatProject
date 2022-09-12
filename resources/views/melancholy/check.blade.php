@extends('melancholy.layout')
@section('title',"自己評価式抑うつ性尺度")
 


@section('contents')
<div class="top-title">
    <p>下の各々の文章を読んで、最近のあなたの状態に最もよく当てはまると思われる段階を選択して下さい。<br>
    あまり考えないで、最近感じている通りに選択して下さい。</p>
    </div>
<br>

  <?php $numbe = array(1,2,3,4); ?>
    <form action="{{route('ans')}}" method="post">
        @csrf 

        <div class='question'>
            <div class="main-container">
                <div class="container-title">
                    <h2 >1 問目: 気分が沈んで憂うつだ</h2> 
                    <h5>1(ほとんどない)　〜4　(ほとんどいつも)</h5>
                </div>
                <div class="container-ans">
                     @error('q1')
                         <p style="color: red;font-size:12px;">{{ $message }}</p>
                     @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q1"  value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>2 問目: 朝方は、いちばん気分がよい</h2>
                    <h5>1(ほとんどいつも)　〜  4(ほとんどない)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q2')
                        <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q2" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>3 問目: 泣いたり、泣きたくなる</h2>
                    <h5>1 (ほとんどない)　〜4　(ほとんどいつも)</h5>
                </div>
                <div class="container-ans"> 
                        @error('q3')
                            <p style="color: red;font-size:12px;">{{ $message }}</p>
                        @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q3" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>4 問目: 夜はよく眠れない</h2>
                    <h5>1 (ほとんどない)　〜4　(ほとんどいつも</h5>
                </div>
                <div class="container-ans"> 
                    @error('q4')
                        <p style="color: red;font-size:12px;">{{ $message }}</p>
                     @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q4" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>5 問目: 食欲は　ふつうだ</h2>
                    <h5>1 (ふつう)　〜4　(ほとんどない)</h5>
                </div>
               <div class="container-ans"> 
                @error('q5')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q5" value={{$numbez}}> {{$numbez}}
                   @endforeach
              </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>6 問目: 異性に対する関心がある</h2>
                    <h5>1 (ある)　〜4　(ほとんどない)</h5>
                </div>
                @error('q6')
                <p style="color: red;font-size:12px;">{{ $message }}</p>
                @enderror
                <div class="container-ans"> 
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q6" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>7 問目: 痩せてきたことに　気がつく</h2>
                    <h5>1 (ほとんどない)　〜4　(よく思う)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q7')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q7" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>8 問目: 便秘している</h2>
                    <h5>1 (ほとんどない)　〜4　(ほとんどいつも)</h5>
                </div>
                <div class="container-ans">   
                    @error('q8')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror                  
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q8" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>9 問目: ふだんよりも　動悸がする</h2>
                    <h5>1 (ほとんどない)　〜4　(ほとんどいつも)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q9')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                     @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q9" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>10 問目: 何となく疲れる</h2>
                    <h5>1 (ほとんどない)　〜4　(ほとんどいつも)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q10')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                   @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q10" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>11 問目: 気持ちは　いつもさっぱりしている</h2>
                    <h5>1 (ほとんどいつも)　〜4　(ほとんどない)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q11')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q11" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <br> 
            <div class="main-container">
                <div class="container-title">
                    <h2>12 問目: いつもと変わりなく　仕事をやれる</h2>
                    <h5>1 (いつも通り)　〜4　(いつも通りできない)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q12')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                     @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q12" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <br> 
            <div class="main-container">
                <div class="container-title">
                    <h2>13 問目: 落ち着かず、じっとしていられない</h2>
                    <h5>1 (じっとしていられない)　〜4　(じっとしていられる)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q13')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q13" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>14 問目: 将来に　希望がある</h2>
                    <h5>1 (希望がある)　〜4　(希望がない)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q14')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q14" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>15 問目: いつもより　いらいらする</h2>
                    <h5>1 (ほとんどない)　〜4　(ほとんどいつも)</h5>
                </div>
                <div class="container-ans">
                    @error('q15')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror 
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q15" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>16 問目: たやすく　決断できる</h2>
                    <h5>1 (決断できる)　〜4　(決断できない)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q16')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q16" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <div class="main-container">
                <div class="container-title">
                    <h2>17 問目: 役に立つ、働ける人間だと思う</h2>
                    <h5>1 (思わない)　〜4　(思う)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q17')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q17" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <br> 
            <div class="main-container">
                <div class="container-title">
                    <h2>18 問目: 生活は　かなり充実している</h2>
                    <h5>1 (充実している)　〜4　(充実していない)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q18')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q18" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <br> 
            <div class="main-container">
                <div class="container-title">
                    <h2>19 問目: 自分が死んだほうが　他の人は楽に暮らせる</h2>
                    <h5>1 (そうは思わない)　〜4　(そう思う)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q19')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q19" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
            <br> 
            <div class="main-container">
                <div class="container-title">
                    <h2>20 問目: 日頃していることに満足している</h2>
                    <h5>1 (満足している)　〜4　(満足していない)</h5>
                </div>
                <div class="container-ans"> 
                    @error('q20')
                    <p style="color: red;font-size:12px;">{{ $message }}</p>
                    @enderror
                    @foreach($numbe as $numbez)
                    <input type="radio" name="q20" value={{$numbez}}> {{$numbez}}
                    @endforeach
                </div>
            </div>
        </div>
    <br>
        <div class="ansr">
            <button type="submit" class="button"> 回答して次へ進む</button>   
        </div>
    </form>


@endsection
@section('style')
<link rel="stylesheet" href="{{asset('css/question.css')}}">
@endsection
@extends('layout/master')

@section('maincontent')
<section id="slider">
    <!-- 슬라이더 섹션 -->
    <div class="container">
        <div class="slider">
            <div class="slide-image active" style="background-image:url('/images/vordt.jpg')">
                <div class="filter"></div>
                <h1>슬라이드 제목</h1>
                <p>슬라이드의 내용을 여기다가 표시</p>    
            </div>
            <div class="slide-image" style="background-image:url('/images/695524.jpg')">
                <div class="filter"></div>
                <h1>슬라이드 제목</h1>
                <p>슬라이드의 내용을 여기다가 표시</p>    
            </div>
            <div class="slide-image" style="background-image:url('/images/695524.jpg')">
                <div class="filter"></div>
                <h1>슬라이드 제목</h1>
                <p>슬라이드의 내용을 여기다가 표시</p>    
            </div>
        </div>
        <div class="indicator">
            <ul>
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</section>

<div class="container">
    <section id="editorPick">
        <!-- 에디터 픽 섹션 -->
        에디터 픽 섹션입니다.
    </section>
</div>
@endsection
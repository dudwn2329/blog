@extends('layout/master')

@section('maincontent')
<section id="slider" class="mt-4">
    <!-- 슬라이더 섹션 -->
    <div class="container">
        <div class="slider" >
            <div class="btn-div">
                <button class="btn btn-outline-light">&lt;</button>
                <button class="btn btn-outline-light">&gt;</button>
            </div>
            <div class="slide-image active" style="background-image:url('/images/vordt.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>슬라이드 제목</h1>
                    <p>슬라이드의 내용을 여기다가 표시</p>    
                </div>
            </div>
            <div class="slide-image" style="background-image:url('/images/695524.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>슬라이드 제목</h1>
                    <p>슬라이드의 내용을 여기다가 표시</p>    
                </div>
            </div>
            <div class="slide-image" style="background-image:url('/images/695524.jpg')">
                <div class="filter"></div>
                <div class="slide-content">
                    <h1>슬라이드 제목</h1>
                    <p>슬라이드의 내용을 여기다가 표시</p>    
                </div>
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
    <section id="editorPick" class="mt-4">
        <div class="item">
            <div class="img-box">
                <img src="/images/itemimg.jpg" alt="아이템 이미지">
            </div>
            <div class="info-box">
                <h3>박스 제목</h3>
                <p>박스에 대한 설명입니다. 어쩌구 저쩌구</p>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="/images/itemimg.jpg" alt="아이템 이미지">
            </div>
            <div class="info-box">
                <h3>박스 제목</h3>
                <p>박스에 대한 설명입니다. 어쩌구 저쩌구</p>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="/images/itemimg.jpg" alt="아이템 이미지">
            </div>
            <div class="info-box">
                <h3>박스 제목</h3>
                <p>박스에 대한 설명입니다. 어쩌구 저쩌구</p>
            </div>
        </div>
        <div class="item">
            <div class="img-box">
                <img src="/images/itemimg.jpg" alt="아이템 이미지">
            </div>
            <div class="info-box">
                <h3>박스 제목</h3>
                <p>박스에 대한 설명입니다. 어쩌구 저쩌구</p>
            </div>
        </div>
    </section>
    <ul class="pagination justify-content-center mt-5">
        <li class="page-item">
            <a href="#" class="page-link">이전</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">1</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">2</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">3</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">다음</a>
        </li>
    </ul>
</div>
@endsection
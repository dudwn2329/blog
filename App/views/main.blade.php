@extends('layout/master')

@section('maincontent')
<section id="slider">
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
        @foreach($list as $item)
        <div class="item">
            <div class="img-box">
                {!! $item->thumbnail !!}
                <p>{{ date("Y년 m월 d일", strtotime($item->wdate)) }}</p>
            </div>
            <div class="info-box">
                <a href="/view?id={{ $item-> id}}"><h3>{{ $item-> title}}</h3></a>
                <p>{{$item->content}}</p>
            </div>
        </div>
        @endforeach
    </section>
    <ul class="pagination justify-content-center mt-5">
        @if($p->prev)
        <li class="page-item">
            <a href="/?p={{$p->start - 1 }}" class="page-link">이전</a>
        </li>
        @endif
        @for($i = $p->start; $i <= $p->end; $i++)
        @if($i == $p->current)
        <li class="page-item" style="background-color: #ef9a9a;">        
        @else
        <li class="page-item">
        @endif
        <li class="page-item">
            <a href="/?p={{$i}}" class="page-link">{{ $i }}</a>
        </li>
        @endfor
        
        @if($p->next)
        <li class="page-item">
            <a href="/?p={{$p->start + 1 }}" class="page-link">다음</a>
        </li>
        @endif
    </ul>
</div>
@endsection
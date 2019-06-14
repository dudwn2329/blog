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
            @foreach($slide as $item)
            <div class="slide-image">
                <div class="filter"></div>
                {!!$item->image!!}
                <div class="slide-content">
                    <h1>{!!$item->title!!}</h1>
                </div>
            </div>
            @endforeach
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
    <div class="pagination justify-content-center mt-5">
        @if($p->prev)
            <a href="/?p={{$p->start - 1 }}" class="page-link">이전</a>
        @endif
        @for($i = $p->start; $i <= $p->end; $i++)
        @if($i == $p->current)
        <a href="/?p={{$i}}" class="page-link" style="background-color: #E3672A;">{{ $i }}</a>
        @else
        <a href="/?p={{$i}}" class="page-link">{{ $i }}</a>
        @endif
        @endfor
        
        @if($p->next)
            <a href="/?p={{$p->start+1 }}"  class="page-link">다음</a>
        @endif
    </div>
</div>
@endsection
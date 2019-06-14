@extends('layout/master')

@section('maincontent')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-10">
        <!-- {!!$data->image!!}
        {!!$data->content!!} -->
            <div>
                <div class="card-header"
                    >{{$data->title}} 
                    <span class="badge badge-light">{{$data->writer}}</span>
                    <span class="badge badge-primary">{{$data->wdate}}</span>
                </div>
                <div class="card-body">
                    {!!$data->image!!}
                    {!!$data->content!!}
                </div>
                <div class="card-footer">
                    @if(isset($_SESSION['user']))
                        @if($data->writer == $_SESSION['user']->id)
                        <button type="button" class="btn btn-danger"><a href="/delete?id={{$data->id}}">삭제</a></button>
                        <button type="button" class="btn btn-secondary"><a href="/edit?id={{$data->id}}">수정</a></button>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
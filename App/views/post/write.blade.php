@extends('layout/master')

@section('maincontent')
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-10">
            <h2 class="mt-3 mb-5 text-center">글쓰기</h2>
            <form action="/post" method="post">
                <div class="form-group">
                    <label>글 제목</label>
                    <input class="form-control" type="text" name="title">
                </div>
                <div class="form-group">
                    <label>글 내용</label>
                    <textarea class="form-control" name="content"></textarea>
                </div>

                <div class="row">
                    <div class="col-10 text-right">
                        <button type="submit" class="btn btn-outline-primary">글쓰기</button>
                        <button type="reset" class="btn btn-outline-danger">취소</button>
                    </div>
                </div>
            </form>
        </div>    
    </div>
</div>
@endsection
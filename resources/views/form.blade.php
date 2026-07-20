@extends('layout')

@section('title', 'เขียนบทความ')

@section('content')

    <h2 class="text-center">เขียนบทความ</h2>
    <form method="post" action="/insert">
        @csrf
        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input type="text" class="form-control" name="title">
        </div>

        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label for="title">เนื้อหา</label>
            <textarea type="text" class="form-control" name="title" cols="30" rows="5"></textarea>
        </div>

        @error('content')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <input type="submit" class="btn btn-primary my-3">
        <a href="/blogs" class="btn btn-secondary">บทความทั้งหมด</a>
    </form>

@endsection

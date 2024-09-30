@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h2 class="text-center mb-4">{{ $book->title }}</h2>
        <div class="card">
            <div class="card-body">
                <p><strong>Tác giả:</strong> {{ $book->author }}</p>
                <p><strong>Nhà xuất bản:</strong> {{ $book->publisher }}</p>
                <p><strong>Ngày xuất bản:</strong> {{ $book->publication }}</p>
                <p><strong>Giá bán:</strong> {{ number_format($book->price) }} VND</p>
                <p><strong>Số lượng:</strong> {{ $book->quantity }}</p>
                <a href="{{ route('category', $book->category_id) }}" class="btn btn-primary">Xem các sách cùng loại</a>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="text-center mb-4">Loại sách: {{ $category->name }}</h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Nhà xuất bản</th>
                    <th>Giá bán</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ number_format($book->price) }} VND</td>
                    <td>
                        <a href="{{ route('book.show', $book->id) }}" class="btn btn-info btn-sm">Xem chi tiết</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

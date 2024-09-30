<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class BookController extends Controller
{
    public function index()
{
    // Lấy 8 sản phẩm có giá cao nhất
    $expensiveBooks = \DB::table('books')
        ->orderBy('price', 'desc')
        ->limit(8)
        ->get();

    // Lấy 8 sản phẩm có giá thấp nhất
    $cheapBooks = \DB::table('books')
        ->orderBy('price', 'asc')
        ->limit(8)
        ->get();

    return view('home', compact('expensiveBooks', 'cheapBooks'));
}
public function category($id)
{
    // Lấy loại sách theo ID
    $category = \DB::table('categories')->where('id', $id)->first();

    // Lấy tất cả các sách thuộc loại này
    $books = \DB::table('books')
        ->where('category_id', $id)
        ->get();

    return view('category', compact('category', 'books'));
}
public function show($id)
{
    // Lấy thông tin sách theo ID
    $book = \DB::table('books')->where('id', $id)->first();

    return view('book', compact('book'));
}


}

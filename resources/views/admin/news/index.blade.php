@extends('layouts.admin')
@section('content')
    <h1 class="h2">Новости</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{{ route('admin.news.create') }}" class="btn btn-sm btn-outline-secondary">Добавить</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>#ID</th>
                    <th>Категория</th>
                    <th>Заголовок</th>
                    <th>Автор</th>
                    <th>Дата добавления</th>
                    <th>Действия</th>
                </tr>
                @foreach($news as $newsItem)
                    <tr>
                        <td>{{ $newsItem->id }}</td>
                        <td>{{ $newsItem->category_title }}</td>
                        <td>{{ $newsItem->title }}</td>
                        <td>{{ $newsItem->author }}</td>
                        <td>{{ $newsItem->created_at }}</td>
                        <td>
                            <a href="#">Edit</a>
                            <a href="#" style="color: tomato">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
@endsection

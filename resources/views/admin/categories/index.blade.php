@extends('layouts.admin')
@section('content')
    <h1 class="h2">Категории</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-sm btn-outline-secondary">Добавить</a>
        </div>
    </div>
    <div class="table-responsive">

    </div>
@endsection

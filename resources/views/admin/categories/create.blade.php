@extends('layouts.admin')
@section('content')
    <h2>Добавить категорию</h2>

    @if($errors->any())
        @foreach($errors->all() as $error)
            @include('components.alert', ['type'=>'danger', 'message' => $error])
        @endforeach
    @endif

    <form method="post" action="{{ route('admin.categories.store', ['status=1']) }}">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Название</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание</label>
            <textarea class="form-control" id="description" name="description" rows="3" >{!! old('description') !!}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Сохранить</button>
    </form>
@endsection

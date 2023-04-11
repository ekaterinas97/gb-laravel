@extends('layouts.admin')
@section('content')
    <h2>Редактировать категорию</h2>
    <form method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Название</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Сохранить</button>
    </form>
@endsection

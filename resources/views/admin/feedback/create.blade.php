@extends('layouts.admin')
@section('content')
    <h2>Отзыв</h2>

    @if($errors->any())
        @foreach($errors->all() as $error)
            @include('components.alert', ['type'=>'danger', 'message' => $error])
        @endforeach
    @endif

    <form method="post" action="{{ route('admin.feedback.store', ['status=1']) }}">
        @csrf
        <div class="form-group">
            <label for="user_name">Имя пользователя</label>
            <input type="text" class="form-control" id="user_name" name="user_name" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="description">Отзыв</label>
            <textarea class="form-control" id="description" name="description" rows="3" >{!! old('description') !!}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Отправить</button>
    </form>
@endsection

@extends('layouts.app')

@section('content')

    <h1>id = {{ $todolist->id }} のToDo詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $todolist->id }}</td>
        </tr>
        <tr>
            <th>ToDo</th>
            <td>{{ $todolist->content }}</td>
        </tr>
    </table>
    {{-- ToDo編集ページへのリンク --}}
    {!! link_to_route('Todolists.edit', 'このToDoを編集', ['Todolist' => $todolist->id], ['class' => 'btn btn-light']) !!}

    {{-- ToDo削除フォーム --}}
    {!! Form::model($todolist, ['route' => ['Todolists.destroy', $todolist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection

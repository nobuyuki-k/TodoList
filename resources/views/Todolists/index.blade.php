@extends('layouts.app')

@section('content')

    <h1>ToDo一覧</h1>

    @if (count($Todolists) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ToDo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Todolists as $todolist)
                <tr>
                    {{-- ToDo詳細ページへのリンク --}}
                    <td>{!! link_to_route('Todolists.show', $todolist->id, ['Todolist' => $todolist->id]) !!}</td>
                    <td>{{ $todolist->content }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    @endif
    {{-- ToDo作成ページへのリンク --}}
    {!! link_to_route('Todolists.create', '新規ToDoの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection
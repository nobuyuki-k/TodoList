@extends('layouts.app')

@section('content')

    <h1>ToDo新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($todolist, ['route' => 'Todolists.store']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'ToDo:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection
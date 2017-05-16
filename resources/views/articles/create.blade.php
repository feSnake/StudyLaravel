
@extends('app')

@section('content')

    <h1>撰写文章</h1>

    {!! Form::open(['url'=>'/articles']) !!}

    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content') !!}
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('published_at','published_at:') !!}
        {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('发表文章',['class'=>'btn btn-primary form-control' ]) !!}

    {!! Form::close() !!}
@stop
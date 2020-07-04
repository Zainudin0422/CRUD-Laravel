@extends('AdminLTE.Template.master')

<!-- Title Page -->
@push('title')

Data Table

@endpush


@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Form Create Question</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form method="POST" action="{{'/questions/'.$question->id}}">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="TitleQuestion">Title</label>
                <select name="title" type="text" class="form-control" id="TitleQuestion">
                    <option selected readonly>{{$question->title}}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Question">Question</label>
                <textarea name="fill" class="form-control" id="Question" rows="7" placeholder="Question ...">{{$question->fill}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success float-right">Send Question</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
</div>
@endsection
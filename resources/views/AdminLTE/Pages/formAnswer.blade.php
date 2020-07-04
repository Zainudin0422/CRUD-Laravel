@extends('AdminLTE.Template.master')

<!-- Title Page -->
@push('title')

Data Table

@endpush


@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Form Answer from Question</h3>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-success">
                            <div class="card-header">
                                <b>{{ $question->title}}</b>
                            </div>
                            <div class="card-body">
                                {{ $question->fill}}
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <b>Answer Question All</b>
                            </div>
                            <div class="card-body overflow-auto">
                                @foreach($answers as $answer)
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-timestamp float-left">{{ date($answer->created_at)}}</span>
                                    </div>
                                    <img class="direct-chat-img" src="{{ asset('AdminLTE/dist/img/user1-128x128.jpg')}}" alt="Message User Image">
                                    <div class="direct-chat-text">
                                        {{ $answer->answer_fill}}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <form method="POST" action="{{'/answers'}}">
                            @csrf
                            <div class="form-group">
                                <label for="TitleAnswer">Answer</label>
                                <input name="question_id" type="hidden" value="{{$question->id}}">
                                <textarea name="answer_fill" type="text" class="form-control" id="TitleAnswer" rows="5" placeholder="Question ..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success float-right">Send Question</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h3>All Questions</h3>
                        <div class="ml-auto">
                            <a class="btn btn-outline-secondary" 
                            href="{{route('questions.create')}}">
                            Ask This Question</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                @foreach($questions as $question)
                <div class="media">
                    <div class="d-flex flex-column counters">
                        <div class="vote">
                            <strong>{{$question->votes}}</strong>
                            {{str_plural('vote',$question->votes)}}
                        </div>
                        <div class="status {{$question->status}}">
                            <strong>{{$question->answers}}</strong>
                            {{str_plural('answer',$question->answers)}}
                        </div>
                        <div class="views">
                            {{$question->views}}
                            {{str_plural('view',$question->views)}}
                        </div>
                    </div>
                       <div>
                        <h4>
                            <a href="{{$question->url}}">
                            {{$question->title}}
                            </a>
                        </h4>
                        <p class="lead">
                            Asked by <a href="{{$question->user->url}}">
                                {{$question->user->name}}</a>
                            <small>
                                {{$question->create_date}}
                            </small>    
                        </p>
                        <p>
                            {{str_limit($question->body,250)}}
                        </p>
                       </div>
                   </div>
                   <hr>
                @endforeach 
                    <div class="pagination justify-content-center">
                        {{$questions->links()}}
                    </div>      
               </div>
            </div>
        </div>
    </div>
</div>
@endsection

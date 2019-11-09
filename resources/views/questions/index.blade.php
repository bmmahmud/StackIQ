@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Question</div>

                <div class="card-body">
                @foreach($questions as $question)
                <div class="media">
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

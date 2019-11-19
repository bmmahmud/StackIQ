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
                            href="{{route('questions.index')}}">
                            Back To All Question</a>
                        </div>
                    </div>
                </div>

            <div class="card-body">
                <form action="{{route('questions.store')}}" method="post">
                @csrf
                    <div class="form-group">
                      <label for="question-title">Question Title</label>
                      <input value="{{old('title')}}" 
                        class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" 
                        name="title" 
                        type="text" id="question-title"> 
                            @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                            @endif
                    </div>
                    <div class="form-group">
                      <label for="question-body">Explain Your Question</label>
                      <textarea  rows="5" class="form-control {{ $errors->has('body') ? ' is-invalid' : '' }}" 
                          name="body" type="text" id="question-body">{{old('body')}}</textarea> 
                        @if ($errors->has('body'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-success btn-lg" type="submit" type="submit">
                            Ask This Question
                        </button>     
                    </div>
                </form>       
            
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                <div class = "d-flex align-items-center"> 
                    <h3>Ask a Question</h3>
                     
                    <div class = "ml-auto"> 
                        <a href = "{{ route('questions.index') }}" class = "btn btn-outline-secondary"> All Questions </a>
                    </div>  
                    </div>  
                </div>

                    <div class="card-body">
                <form action = "{{route('questions.store')}}" mehod = "POST">
                    @csrf
                    <div class = "form-group">
                        <label for = "question-title">Question Title</label>
                        <input type = "text" name = "title" class = "form-control {{ $errors->has('title') ? is-invalid : ' '}}" id = "question-title">
                    </div>
                    @if ($errors->has('title'))
                        <div class = "invalid-feedback">
                            <strong> {{$errors->first('title')}} </strong>
                        </div>
                    @endif
                    <div class = "form-group">
                        <label for = "question-body">Explain your Question</label>
                        <textarea name = "body" class = "form-control {{ $errors->has('body') ? is-invalid : ' '}}" id = "question-body" rows= "6"></textarea>
                    </div>
                    @if ($errors->has('body'))
                        <div class = "invalid-feedback">
                            <strong> {{$errors->first('body')}} </strong>
                        </div>
                    @endif
                    <div class = "form-group">
                        <button type = "submit" class = "btn btn-outline-primary btn-lg">Ask</button>
                     </div>
                </form>
                    <div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

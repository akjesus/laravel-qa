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
                <form action = "{{ route('questions.store') }}" method = "POST">
                    @csrf
                    <div class = "form-group">
                        <label for = "title">Question Title</label>
                        <input type = "text" name = "title" value = "{{ old('title') }}"class = "form-control {{ $errors->has('title') ? 'is-invalid' : ' '}}" id = "title">
                    </div>
                    @if ($errors->has('title'))
                        <span class = "invalid-feedback">
                            <strong> {{ $errors->first('title') }} </strong>
                        </span>
                    @endif
                    <div class = "form-group">
                        <label for = "body">Explain your Question</label>
                        <textarea name = "body" class = "form-control {{ $errors->has('body') ? 'is-invalid' : ' '}}" id = "body" rows= "6">{{ old('body') }}</textarea>
                    </div>
                    @error('body')
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class = "form-group">
                        <button type = "submit" class = "btn btn-outline-primary btn-lg">Ask this Question</button>
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

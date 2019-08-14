@csrf
                    <div class = "form-group">
                        <label for = "title">Question Title</label>
                        <input type = "text" name = "title" value = "{{ old('title', $question->title) }}"class = "form-control {{ $errors->has('title') ? 'is-invalid' : ' '}}" id = "title">
                    </div>
                    @if ($errors->has('title'))
                        <span class = "invalid-feedback">
                            <strong> {{ $errors->first('title') }} </strong>
                        </span>
                    @endif
                    <div class = "form-group">
                        <label for = "body">Explain your Question</label>
                        <textarea name = "body" class = "form-control {{ $errors->has('body') ? 'is-invalid' : ' '}}" id = "body" rows= "6">{{ old('body',  $question->body) }}</textarea>
                    </div>
                    @error('body')
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class = "form-group">
                    <button type = "submit" class = "btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
                     </div>
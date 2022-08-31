<input type="text" name="list" class="form-control  mb-2 @error('list')
        is-invalid
    @enderror"
    value="{{ $task->list }}">
@error('list')
    <span class="invalid-feedback">{{ $message }}</span>
@enderror
<input type="submit" value="{{$submit}}" class="btn btn-primary">

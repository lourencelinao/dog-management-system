<div class="col-md-5">
    <label for="{{ $target }}" class="col-form-label custom-text-color">{{ $label }}</label>
    <input type="{{ $type }}"  class="form-control bg-light @error('{{ $target }}') is-invalid @enderror" id="{{ $target }}" name="{{ $target }}">
    @error('{{ $target }}')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
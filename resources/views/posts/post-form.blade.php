<div class="mb-3">
    <label for="subject" class="form-label">제목</label>
    <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="" id="subject" value="{{ $post->subject ? $post->subject : old('subject') }}">
    @error('subject')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="content" class="form-label">내용</label>
    <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{ $post->content ? $post->content : old('content') }}</textarea>
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="text-end">
    <input type="submit" class="btn btn-primary" value="제출">
</div>
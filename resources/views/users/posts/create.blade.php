@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="container w-75">
        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label d-block fw-bold">
                    Category <span class="text-muted fw-normal">(up to 3)</span></h1>
                </label>

                @foreach ($all_categories as $category)
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="category[]" id="{{ $category->name }}" class="form-check-input" value="{{ $category->id }}">
                        <label for="{{ $category->name }}" class="form-check-label">{{ $category->name }}</label>
                    </div>
                @endforeach
            </div>
                {{-- error --}}
                @error('category')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror

            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Description</label>
                <textarea name="description" id="description" rows="3" class="form-control" placeholder="What's on your mind?">{{ old('description') }}</textarea>
                {{-- ERROR --}}
                @error('description')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="image" class="form-label fw-bold">Image</label>
                <input type="file" name="image" id="image" class="form-control" aria-describedby="image-info">
                <div id="image-info" class="form-text">
                    The acceptable formats are jpeg, jpg, png and gif only. <br>
                    Max file size is 1048kb.
                </div>
                {{-- ERROR --}}
                @error('image')
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary px-5">Post</button>
        </form>
    </div>
@endsection

{{-- self-made --}}
{{--
    <h1 class="h5">
        <span class="fw-bold">Category</span> <span class="text-secondary">(up to 3)</span>
    </h1>
    <div class="form-check">
        @foreach ($all_categories as $category)
            <input type="checkbox" name="{{ $category->name }}" id="{{ $category->name }}" class="form-check-input">
            <label for="{{ $category->name }}" class="form-check-label">{{ $category->name }}</label>
        @endforeach
    </div>
    <label for="description" class="mt-3 h5 fw-bold form-label">Description</h1>
    <textarea name="description" id="description" cols="100" class="form-control mt-2 mb-3" placeholder="What's on your mind"></textarea>
    <input type="file" class="form-control">
    <button type="submit" class="btn btn-primary w-25 mt-3">Post</button>
 --}}
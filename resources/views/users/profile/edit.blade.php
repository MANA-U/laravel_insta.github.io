@extends('layouts.app')

@section('title', $user->name)

@section('content')
<div class="row justify-content-center">
    <div class="div col-8">
        <form action="{{ route('profile.update') }}" method="post" class="bg-white shadow rounded-3 p-5" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
    
            <h2 class="h3 mb-3 fw-light text-muted">Update Profile</h2>
    
            <div class="row mb-3">
                <div class="col-4">
                    @if ($user->avatar)
                        <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="img-thumbnail avatar-lg">
                    @else
                        <i class="fa-solid fa-circle-user text-secondary d-block text-center icon-lg"></i>
                    @endif
                </div>
    
                <div class="col-auto align-self-end">
                    <input type="file" name="avatar" id="avatar" class="form-control form-control-sm mt-1" aria-describedby="avatar-info">
                    <div id="avatar-info" class="form-text">
                        Acceptable formats: jpeg, jpg, png, gif only. <br>
                        Maximum file size is 1048kb
                    </div>
                    {{-- Error --}}
                    @error('avatar')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}">
                    {{-- Error --}}
                    @error('name')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}">
                    {{-- Error --}}
                    @error('email')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="introduction" class="form-label fw-bold">Introduction</label>
                    <textarea name="introduction" id="introduction" rows="5" class="form-control" placeholder="Describe yourself">{{ old('introduction', $user->instroduction) }}</textarea>
                    {{-- Error --}}
                    @error('introduction')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror
                </div>
    
                <button type="submit" class="btn btn-warning px-5">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
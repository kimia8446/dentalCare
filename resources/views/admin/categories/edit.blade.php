
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">ویرایش دسته‌بندی</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">عنوان دسته‌بندی</label>
            <input
                type="text"
                name="title"
                id="title"
                class="form-control"
                value="{{ old('title', $category->title) }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input
                type="text"
                name="slug"
                id="slug"
                class="form-control"
                value="{{ old('slug', $category->slug) }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">توضیحات</label>
            <textarea
                name="description"
                id="description"
                class="form-control"
                rows="4"
            >{{ old('description', $category->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            ذخیره تغییرات
        </button>

        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
            بازگشت
        </a>
    </form>
</div>
@endsection


@extends('layouts.app')

@section('content')
<div class="container py-4 admin-form-page">
    <div class="admin-page-header">
        <h1>افزودن دسته‌بندی</h1>
    </div>

    @if ($errors->any())
        <div class="admin-alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="admin-form-card">
        <form action="{{ route('admin.categories.store') }}" method="POST" class="admin-form">
            @csrf

            <div class="admin-form-group">
                <label for="title">عنوان دسته‌بندی</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            </div>

            <div class="admin-form-group">
                <label for="slug">شناسه انگلیسی (Slug)</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug') }}" required>
            </div>

            <div class="admin-form-group">
                <label for="description">توضیحات</label>
                <textarea name="description" id="description" rows="4">{{ old('description') }}</textarea>
            </div>

            <div class="admin-form-actions">
                <button type="submit" class="admin-btn">ذخیره دسته‌بندی</button>
                <a href="{{ route('admin.categories.index') }}" class="admin-btn admin-btn-secondary">بازگشت</a>
            </div>
        </form>
    </div>
</div>
@endsection

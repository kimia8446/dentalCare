
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>مدیریت دسته‌بندی‌ها</h1>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
            افزودن دسته‌بندی
        </a>
    </div>
@if(session('success'))
    <div class="alert alert-success">
            {{ session('success') }}
    </div>
@endif
 @if ($categories->isEmpty())
        <div class="alert alert-info">
            هنوز دسته‌بندی‌ای ثبت نشده است.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>شناسه</th>
                        <th>عنوان</th>
                        <th>Slug</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-warning">
                                    ویرایش
                                </a>

                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">
                                        حذف
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
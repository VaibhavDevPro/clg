@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Food Categories</h1>
        <a href="{{ route('food-categories.create') }}" class="btn btn-primary">Add Category</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            {{ $dataTable->table() }}
        </div>
    </div>
    @push('scripts')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush
@endsection

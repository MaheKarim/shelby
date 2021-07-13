@extends('layouts.master')

@section('title', 'Edit Item')

@section('heading', 'Edit Item')

@section('heading_buttons')
    <a href="{{route('items.index')}}" class="btn btn-primary">All Items</a>
@endsection
{{--@section('breadcrumbs', Breadcrumbs::render('domains.create'))--}}


@section('contents')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('items.update', [$item->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('items.form')
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
@endsection

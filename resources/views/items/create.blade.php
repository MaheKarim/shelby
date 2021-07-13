@extends('layouts.master')

@section('title', 'Create Items')

@section('heading', 'Create Items')

@section('heading_buttons')
    <a href="{{route('items.index')}}" class="btn btn-primary">All Items </a>
@endsection
{{--@section('breadcrumbs', Breadcrumbs::render('domains.create'))--}}


@section('contents')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('items.form')
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection

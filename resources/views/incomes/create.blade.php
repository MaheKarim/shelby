@extends('layouts.master')

@section('title', 'Create Income')

@section('heading', 'Create Income')

@section('heading_buttons')
    <a href="{{route('incomes.index')}}" class="btn btn-primary">All Income </a>
@endsection
{{--@section('breadcrumbs', Breadcrumbs::render('domains.create'))--}}


@section('contents')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('incomes.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('incomes.form')
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection

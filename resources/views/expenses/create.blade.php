@extends('layouts.master')

@section('title', 'Create Expense')

@section('heading', 'Create Expense')

@section('heading_buttons')
    <a href="{{route('expenses.index')}}" class="btn btn-primary">All Expense</a>
@endsection
{{--@section('breadcrumbs', Breadcrumbs::render('domains.create'))--}}


@section('contents')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('expenses.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('expenses.form')
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection

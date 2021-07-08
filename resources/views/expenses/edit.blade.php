@extends('layouts.master')

@section('title', 'Edit Expense')

@section('heading', 'Edit Expense')

@section('heading_buttons')
    <a href="{{route('expenses.index')}}" class="btn btn-primary">All Expense</a>
@endsection
{{--@section('breadcrumbs', Breadcrumbs::render('domains.create'))--}}


@section('contents')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('expenses.update', [$expense->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('expenses.form')
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
@endsection

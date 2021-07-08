@extends('layouts.master')

@section('title', 'Edit Income')

@section('heading', 'Edit Income')

@section('heading_buttons')
    <a href="{{route('incomes.index')}}" class="btn btn-primary">All Income</a>
@endsection
{{--@section('breadcrumbs', Breadcrumbs::render('domains.create'))--}}


@section('contents')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('incomes.update', [$income->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('incomes.form')
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
@endsection

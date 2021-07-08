@extends('layouts.master')

@section('title', 'All Income')

@section('heading', 'All Income')

{{--@section('breadcrumbs', Breadcrumbs::render('city.index'))--}}

@section('contents')
    <form action="{{ route('incomes.index') }}" enctype="multipart/form-data" method="GET">
        <div class="col-12 col-md-12 col-lg-12" style="padding: 0px">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="status">Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="">Select Status</option>
                                {{--                                @foreach(trans('brand.status') as $key => $status)--}}
                                {{--                                    <option value="{{ $key }}"--}}
                                {{--                                            @if(array_get($input, 'status') == $key) selected @endif>{{ $status }}</option>--}}
                                {{--                                @endforeach--}}
                            </select>
                        </div>
                        <div class="col-md-3" style="margin-top: 30px">
                            <button type="submit" class="btn btn-primary">Apply Filters</button>
                            @if(!empty(array_filter($input)))
                                <a href="#" class="btn btn-light">Remove Filters</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>
                <a href="{{ route('incomes.create') }}" class="btn btn-lg btn-success">Create New +</a>
                </h4>
                <div class="card-header-form">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search"
                               value="{{ $input['search'] ?? '' }}">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-wrapper">
                <table class="table-responsive card-list-table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>
                        <th scope="col">Note </th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($incomes as $income)

                        <tr>
                            <td scope="row"  data-title="#">{{ $income->id }}</td>
                            <td  data-title="Name">{{ $income->name }}</td>
                            <td  data-title="Amount">{{ $income->amount }}</td>
                            <td  data-title="Date">{{ $income->date }}</td>
                            <td  data-title="Note">{{ $income->note }}</td>
                            <td  data-title="Actions">
                                <a href="{{ route('incomes.edit', [$income->id]) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ route('incomes.delete', [$income->id]) }}" class="btn btn-sm btn-warning">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">
                            Showing {{ $incomes->firstItem() }} to {{ $incomes->lastItem() }} of {{ $incomes->total() }} entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <div class="float-right">
                            {{ $incomes->appends(request()->except('page'))->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection()


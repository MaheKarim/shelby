@php
    $item = $item ?? collect([]);
@endphp
<div class="form-group">
    <label>Name </label>
    <input type="text" class="form-control" name="name" value="{{ old('name') ?? data_get($item, 'name')  }}">
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Quantity</label>
        <input type="text" class="form-control" name="quantity" value="{{ old('amount') ?? data_get($item, 'quantity') }}">
    </div>
    <div class="form-group col-md-6">
        <label>Description</label>
        <input type="text" class="form-control" name="description" value="{{ old('note') ?? data_get($item, 'description') }}">
    </div>
</div>

    @if(isset($item->id))
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
                @foreach(trans('item.status') as $key => $value)
                    <option value="{{$key}}" {{(old('status') == $key || data_get($item, 'status') == $key) ? 'selected':'' }}> {{ $value }} </option>

                @endforeach
            </select>
        </div>
        @endif






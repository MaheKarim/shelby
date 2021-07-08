@php
    $expense = $expense ?? collect([]);
@endphp
<div class="form-group">
    <label>Name </label>
    <input type="text" class="form-control" name="name" value="{{ old('name') ?? data_get($expense, 'name')  }}">
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Amount</label>
        <input type="text" class="form-control" name="amount" value="{{ old('amount') ?? data_get($expense, 'amount') }}">
    </div>
    <div class="form-group col-md-6">
        <label>Note</label>
        <input type="text" class="form-control" name="note" value="{{ old('note') ?? data_get($expense, 'note') }}">
    </div>
</div>

<div class="form-group">
    <label>Date </label>
    <input type="date" class="form-control" name="date" value="{{ old('date') ?? data_get($expense, 'date')  }}">
</div>




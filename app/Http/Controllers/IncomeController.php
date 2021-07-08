<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->all();
        $incomes = Income::orderBy('id', 'desc')->paginate();
        return view('incomes.index', compact('incomes', 'input'));
    }

    public function create()
    {
        return view('incomes.create');
    }

    public function store(Request $request)
    {
        $income = new Income();
        $income->fill($request->all())->save();

        return redirect()->route('incomes.index')->with(['_status' => 'success', '_msg' => 'Income Successfully Created!']);
    }

    public function edit($id)
    {
        $income = Income::findOrFail($id);

        return view('incomes.edit', compact('income'));
    }

    public function update($id, Request $request)
    {
        $income = Income::findOrFail($id);
        $income->update($request->all());

        return redirect()->route('incomes.index')->with(['_status' => 'success', '_msg' => 'Income Successfully Updated!']);
    }

    public function delete($id)
    {
        $income = Income::findOrFail($id);
        $income->delete();

        return back();
    }
}

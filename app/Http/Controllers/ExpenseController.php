<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $input = $request->all();
        $expenses = Expense::orderBy('id', 'desc')->paginate();

        return view('expenses.index', compact('expenses', 'input'));
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        $expense = new Expense();
        $expense->fill($request->all())->save();

        return redirect()->route('expenses.index')->with(['_status' => 'success', '_msg' => 'Expense Successfully Created!']);
    }

    public function edit($id)
    {
        $expense = Expense::findOrFail($id);

        return view('expenses.edit', compact('expense'));
    }

    public function update($id, Request $request)
    {
        $expense = Expense::findOrFail($id);
        $expense->update($request->all());

        return redirect()->route('expenses.index')->with(['_status' => 'success', '_msg' => 'Expense Successfully Updated!']);
    }

    public function delete($id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();

        return redirect()->route('expenses.index')->with(['_status' => 'fails', '_msg' => 'Expense Successfully Deleted!']);
    }
}

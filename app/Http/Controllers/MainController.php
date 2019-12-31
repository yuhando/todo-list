<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    // getIndex by displaying existing data on index or home page
    public function getIndex()
    {
        $todos = Todo::all();
        $data = [
            'todos' => $todos
        ];
        return view('layouts.home', $data);
    }

    // postIndex is used to update the done field on database when the user clicks on the checkbox
    public function postIndex()
    {
        $id = Input::get('id');
        $items = Todo::findOrFail($id);
        $items->mark();

        return redirect('/');
    }

    // getCreate is used to direct user to create new task form
    public function getCreate()
    {
        return view('layouts.create');
    }

    // postCreate is used to save data to database after user input data on create new task form and will be directed to index page
    public function postCreate()
    {
        $item = new Todo;
        $item->name = Input::get('name');
        $item->save();

        return redirect('/');
    }

    // getDelete is used to delete data task to do
    public function getDelete($taskid)
    {
        $todo= Todo::find($taskid);
        $todo->delete();

        return redirect('/');
    }
}

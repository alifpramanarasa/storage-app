<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Str;

class TodoController extends Controller
{
    protected $todo;
    protected $todoService;

    public function __construct(Todo $todo, )
    {
        $this->todo = $todo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $todos = $this->todo->get();
       return view('todo.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TodoRequest $request)
    {
        $input = $request->all();
        $todo = new Todo();
        $todo->title = $input['title'];
        $todo->description = $input['description'];
        $todo->slug = Str::slug($input['title']);
        $todo->completed = $input['completed'];
        $todo->save();

        return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = $this->todo->find($id);
        return view('todo.edit', compact('todo'));       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TodoRequest $request, string $id)
    {
        $input = $request->all();
        $todo = $this->todo->find($id);
        $todo->title = $input['title'];
        $todo->description = $input['description'];
        $todo->slug = Str::slug($input['title']);
        $todo->completed = $input['completed'];
        $todo->save();

        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = $this->todo->find($id);
        $todo->delete();

        return redirect()->route('todo.index');
    }
}

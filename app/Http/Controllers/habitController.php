<?php

namespace App\Http\Controllers;

use App\Http\Requests\HabitRequest;
use App\Models\Habit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class habitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('components.CadastrarHabito');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $habit = $request->validated();

        Auth::user()->habits()->create($habit);
        return redirect()->route('dashboard');
    }


    /**
     * Display the specified resource.
     */
    public function show(Habit $habit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habit $habit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Habit $habit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if ($habit->user_id !== Auth::id()) {
            abort(403,'tu não tem permissão para deletar esse hábito.');
        }

        $habit->delete();
        return redirect()->route('dashboard');
    }
}

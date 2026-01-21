<?php

namespace App\Http\Controllers;

use App\Http\Requests\HabitRequest;
use App\Models\Habit;
use App\Models\HabitLog;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class habitController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pegar hábitos do usuário autenticado
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.CadastrarHabito');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $habit = $request->validated();

        Auth::user()->habits()->create($habit);
        return redirect()->route('habits.settings');
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
    public function edit(Habit $habit): View
    {
        $this->authorize('update', $habit);
        return view('components.EditarHabito', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        $this->authorize('update', $habit);

        $habit->update($request->validated());
        return redirect()->route('habits.settings');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        $this->authorize('delete', $habit);

        $habit->delete();
        return redirect()->route('habits.settings');
    }

    public function toggle(Habit $habit)
    {
        $this->authorize('toogle', $habit);

        $today = Carbon::today()->toDateString();

        $log = HabitLog::where('habit_id', $habit->id)
            ->where('completed_at', $today)
            ->first();

        if($log){
            $log->delete();
        } else {
            HabitLog::create([
                'user_id' => Auth::id(),
                'habit_id' => $habit->id,
                'completed_at' => $today
            ]);
        }

        return redirect()->route('dashboard');
    }

    public function settings()
    {
        $habits = Auth::user()->habits;

        return view('components.habitSettings', compact('habits'));
    }

}

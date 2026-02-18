<?php

namespace App\Http\Controllers;

use App\Http\Requests\HabitRequest;
use App\Models\Habit;
use App\Models\HabitLog;
use Carbon\Carbon;
use Illuminate\View\View;

class HabitController extends Controller
{
    public function index(): View
    {
        $habits = auth()->user()->habits()
            ->with('habitLogs')
            ->get();

        return view('dashboard', compact('habits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('habits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $validated = $request->validated();

        auth()->user()->habits()->create($validated);

        return redirect()->route('habits.index')->with('success', 'Hábito criado com sucesso!');

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
        return view('habits.edit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        if ($habit->user_id !== auth()->id()) {
            abort(403);
        }
        $habit->update($request->all());

        return redirect()->route('habits.index')->with('success', 'Hábito atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {

        if ($habit->user_id !== auth()->id()) {
            abort(403);
        }
        $habit->delete();

        return redirect()->route('habits.index')->with('success', 'Hábito deletado com sucesso!');
    }

    public function settings()
    {
        $habits = auth()->user()->habits;

        return view('habits.settings', compact('habits'));
    }

    public function toggle(Habit $habit)
    {
        if ($habit->user_id !== auth()->id()) {
            abort(403);
        }

        $today = Carbon::today()->toDateString();

        // Forma corrigida e mais limpa:
        $log = HabitLog::where('habit_id', $habit->id)
            ->where('completed_at', $today)
            ->first();

        if ($log) {
            $log->delete();
            $message = 'Hábito desmarcado.';
        } else {
            HabitLog::create([
                'user_id' => auth()->id(),
                'habit_id' => $habit->id,
                'completed_at' => $today,
            ]);
            $message = 'Hábito concluído!';
        }

        return redirect()->route('habits.index')->with('success', $message);
    }
}

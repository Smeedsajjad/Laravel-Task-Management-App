<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Task;
use Exception;

class TaskController extends Controller
{
    function store(Request $request)
    {

        try {
            // Validate the request
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);

            // Create the task for the logged-in user
            Task::create([
                'user_id' => Auth::id(), // Get the authenticated user's ID
                'title' => $validatedData['title'],
                'description' => $validatedData['description'] ?? null,
            ]);

            return redirect()->back()->with('success', 'Task created successfully!');
        } catch (Exception $e) {
            // Dump the exception for debugging
            dd($e);
        }
    }
    function fetch(Request $request)
    {
        $tasks = Task::paginate(10);
        $totalTasks = Task::count();
        $completedTasks = Task::where('status', 'Completed')->count();
        $pendingTasks = Task::where('status', 'Pending')->count();
        $inProgressTasks = Task::where('status', 'In Progress')->count();

        return view('index', compact('tasks', 'totalTasks', 'completedTasks', 'pendingTasks', 'inProgressTasks'));
    }
    function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->back()->with('success', 'Task deleted successfully!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|string|in:Pending,In Progress,Completed',
        ]);

        $task = Task::findOrFail($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->save();

        return redirect()->back()->with('success', 'Task updated successfully.');
    }

}

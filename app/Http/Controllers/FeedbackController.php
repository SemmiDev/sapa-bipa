<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class FeedbackController extends Controller
{
    /**
     * Display a listing of feedbacks.
     */
    public function index(): View
    {
        $feedbacks = Feedback::latest()->paginate(10);
        
        return view('home.feedback.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new feedback.
     */
    public function create(): View
    {
        return view('home.feedback.create');
    }

    /**
     * Store a newly created feedback in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        Feedback::create([
            'name' => $request->name ?: 'Anonim',
            'description' => $request->description,
        ]);

        return redirect()->route('feedback.create')
                        ->with('success', 'Terima kasih! Feedback Anda telah berhasil dikirim.');
    }
}

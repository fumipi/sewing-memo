<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memos = Memo::with('user')->latest()->get();
        return view('memos.index', compact('memos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('memos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'title' => 'required|max:255',
                'photo_path' => 'required|max:255',
                'pattern' => 'required|max:255',
                'pattern_path' => 'required|max:255',
                'fabric' => 'required|max:255',
                'fabric_path' => 'required|max:255',
                'memo' => 'required|max:255',
            ]);

            $request->user()->memos()->create($request->only('title', 'photo_path', 'pattern', 'pattern_path', 'fabric', 'fabric_path', 'memo'));

            return redirect()->route('memos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Memo $memo)
    {
        return view('memos.show', compact('memo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Memo $memo)
    {
        return view('memos.edit', compact('memo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Memo $memo)
    {
        {
            $request->validate([
                'title' => 'required|max:255',
                'photo_path' => 'required|max:255',
                'pattern' => 'required|max:255',
                'pattern_path' => 'required|max:255',
                'fabric' => 'required|max:255',
                'fabric_path' => 'required|max:255',
                'memo' => 'required|max:255',
            ]);
        
            $memo->update($request->only('title', 'photo_path', 'pattern', 'pattern_path', 'fabric', 'fabric_path', 'memo'));
        
            return redirect()->route('memos.show', $memo);
          }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Memo $memo)
    {
        $memo->delete();

        return redirect()->route('memos.index');
    }
}

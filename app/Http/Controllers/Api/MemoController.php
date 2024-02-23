<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Memo;

class MemoController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $memos = Memo::with('user')->latest()->get();
    return response()->json($memos);
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
    $memo = $request->user()->memos()->create($request->only('title', 'photo_path', 'pattern', 'pattern_path', 'fabric', 'fabric_path', 'memo'));
    return response()->json($memo, 201);
  }

  /**
   * Display the specified resource.
   */
  public function show(Memo $memo)
  {
    return response()->json($memo);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Memo $memo)
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

    $memo->update($request->all());

    return response()->json($memo);
  }
  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Memo $memo)
  {
    $tweet->delete();
    return response()->json(['message' => 'Memo deleted successfully']);
  }
}
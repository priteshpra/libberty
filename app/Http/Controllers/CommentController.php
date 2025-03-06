<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Fetch comments & replies
    public function fetchComments($blogId)
    {
        $comments = Comment::where('blog_id', $blogId)
            ->whereNull('parent_id')
            ->where('is_approved', 1)
            ->with('replies')
            ->latest()
            ->get();

        return response()->json($comments);
    }

    // Store comments and replies
    public function store(Request $request)
    {
        $request->validate([
            'blog_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'comment' => 'required|string',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $comment = Comment::create([
            'blog_id' => $request->blog_id,
            'parent_id' => $request->parent_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'is_approved' => 0, // Auto-approve for now
        ]);

        return response()->json($comment);
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        // return response()->json(['success' => 'Comment deleted successfully']);
        session()->flash('success', 'Comment has been deleted.');
        return back();
    }

    public function updateApproval(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->is_approved = $request->is_approved;
        $comment->save();
        return response()->json(['success' => 'Blog status updated successfully']);
    }

    public function like($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->likes += 1;
        $comment->save();

        return response()->json(['likes' => $comment->likes]);
    }
}

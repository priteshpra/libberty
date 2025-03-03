<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->checkAuthorization(auth()->user(), ['blogs.create']);

        return view('backend.pages.leads.index', [
            'admins' => Lead::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->checkAuthorization(auth()->user(), ['blogs.create']);
        $blog_categories = DB::table('leads')->get();
        return view('backend.pages.leads.create', ['blog_categories' => $blog_categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->checkAuthorization(auth()->user(), ['blogs.create']);

        $admin = new Lead();
        $admin->category_id = $request->category_id;
        $admin->title = $request->title;
        $admin->author = $request->author;
        $admin->blog_date = date('Y-m-d', strtotime($request->blog_date));
        $admin->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blogs'), $imageName); // Save to 'public/uploads'
            $admin->image = $imageName;
        }
        $admin->save();

        session()->flash('success', __('Lead has been created.'));
        return redirect()->route('admin.leads.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): Renderable
    {
        $this->checkAuthorization(auth()->user(), ['blogs.edit']);

        $admin = Lead::findOrFail($id);
        return view('backend.pages.leads.edit', [
            'admin' => $admin,
            'roles' => Role::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $this->checkAuthorization(auth()->user(), ['blogs.edit']);

        $admin = Lead::findOrFail($id);
        $admin->category_id = $request->category_id;
        $admin->title = $request->title;
        $admin->author = $request->author;
        $admin->blog_date = date('Y-m-d', strtotime($request->blog_date));
        $admin->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blogs'), $imageName); // Save to 'public/uploads'
            $admin->image = $imageName;
        }
        $admin->save();

        session()->flash('success', 'Lead has been updated.');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        $this->checkAuthorization(auth()->user(), ['blogs.delete']);

        $admin = Lead::findOrFail($id);
        $admin->delete();
        session()->flash('success', 'Lead has been deleted.');
        return back();
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Blog\CreateRequest;
use App\Http\Requests\Dashboard\Blog\EditRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

/**
 * controller blog about web function
 */
class BlogController extends Controller
{
    /**
     * param Request $request
     * get all blog to manage it
     */
    public function index(Request $request)
    {
        $datas = Blog::all();
        return view('dashboard.blog.index', ['datas' => $datas]);
    }

    public function create()
    {
        return view('dashboard.blog.create');
    }

    public function store(CreateRequest $request)
    {
        $data = new Blog();
        $avatarPath = null;
        if($request->hasFile('avatar'))
        {
            $avatarPath = time() . '.' . Request()->avatar->getClientOriginalExtension();
            Request()->avatar->move(public_path('avatars'), $avatarPath);
        }
        $request->merge(['avatar'=>$avatarPath]);
        $data = $data->create($request->all());
        if($data)
        {
            return redirect(route('dashboard.blog.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.blog.create'))->with('message_false','problem');
    }

    public function edit($id)
    {
        $data = Blog::find($id);
        return view('dashboard.blog.edit', compact('data'));
    }
    public function update(EditRequest $request, $id)
    {
        $data = Blog::find($id);
        $avatarPath = null;
        if($request->hasFile('avatar'))
        {
            $avatarPath = time() . '.' . Request()->avatar->getClientOriginalExtension();
            Request()->avatar->move(public_path('avatars'), $avatarPath);
        }
        $request->merge(['avatar'=>$avatarPath]);
        $data = $data->update($request->all());
        if($data)
        {
            return redirect(route('dashboard.blog.index', $id))->with("message", 'Done');
        }
        return redirect(route('dashboard.blog.edit', $id))->with('message_false','problem');
    }

    public function destroy($id)
    {
        $data = Blog::find($id);
        if($data)
        {
            $data->delete();
            return redirect(route('dashboard.blog.index'))->with("message", 'Done');
        }
        return redirect(route('dashboard.blog.index'))->with('message_false','problem');
    }
}

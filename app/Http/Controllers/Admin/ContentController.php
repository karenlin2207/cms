<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Content;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function index()
    {
        return response()->json(Content::all());
    }
    public function create()
    {
    	return view('admin.create');
    }
    public function detail(Content $content)
    {
        return view('content.detail', compact('content'));
    }
    public function store(Request $request)
    {
        if (Input::hasFile('banner_file')) {
            $file = Input::file('banner_file');
            $extension = $file->getClientOriginalExtension();
            $file_name = strval(time()).str_random(5).'.'.$extension;
            $destination_path = public_path().'/uploads/';
            $upload_success = $file->move($destination_path, $file_name);
            $request['img_uri'] = '/uploads/'. $file_name;
        }

        if(!$request['has_first_part']){
            $request['has_first_part'] = 0;
        }
        $request['last_update_user_id'] = Auth::id();
        $content = Content::create($request->all());
        return redirect('/addmin');
    }
    public function edit($file_name)
    {
        $content = Content::where('uri_name', $file_name)->first();
        return view('admin.edit', compact('content'));
    }
    public function show($file_name)
    {
        $content = Content::where('uri_name', $file_name)->first();
    	return view('show', compact('content'));
    }
    public function update(Request $request, Content $content)
    {
        if (Input::hasFile('banner_file')) {
            $file = Input::file('banner_file');
            $extension = $file->getClientOriginalExtension();
            $file_name = strval(time()).str_random(5).'.'.$extension;
            $destination_path = public_path().'/uploads/';
            $upload_success = $file->move($destination_path, $file_name);
            $request['img_uri'] = '/uploads/'. $file_name;
        }

        $request['last_update_user_id'] = Auth::id();
        $content->update($request->all());
        return redirect('/addmin');
    }
    public function changeStatus(Request $request, Content $content){
        $request = $request->all();
        $content->update($request);
    }
    public function delete(Content $content)
    {
        $content->delete();
    }
}
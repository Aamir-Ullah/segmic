<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HeroSectionController extends Controller
{
    public function index()
    {
        $hero_data = HeroSection::all();
        // return $hero;
        return view('admin.hero.index', compact('hero_data'));
    }
    public function store(Request $request)
    {
        if ($request->isMethod('post')){
            $hero_section=$request->all();
            if (Auth::guard('admin')->check()) {
                $rules=[
                    'video' => 'required|nullable|file|mimes:mp4'
                ];
                $messages = [
                    'video.required' => 'The video field is required.',
                    'video.file' => 'The video must be a file.',
                    'video.mimes' => 'The video must be a file of type: mp4.',
                ];
                $validate=Validator::make($hero_section,$rules,$messages);
                if ($validate->fails()) {
                    return redirect()->back()->withErrors($validate)->withInput();;
                }
                if ($request->hasFile('video')) {
                    $filenameWithExt = $request->file('video')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('video')->getClientOriginalExtension();
                    $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                    $request->file('video')->move(public_path("/hero/videos"), $fileNameToStore);
                }
                $hero_section = new HeroSection();
                if ($request->hasFile('video')) {
                    $hero_section->video = $fileNameToStore;
                }
                if ($hero_section->save()) {
                    return redirect()->back()->with('success', "Hero Section Data Has Been Successfully Saved");
                }
                // $all_data = $request->all();
                // // dd($all_data);
                // $rules=[

                // ];
                // $custom_messages=[

                // ];
                // $validate=Validator::make($all_data,$rules,$custom_messages);
                // $hero_section=new HeroSection();
                // $hero_section->services=$all_data['services'];
            }
        }
    }
}

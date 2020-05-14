<?php

namespace App\Http\Controllers;

use App\Framework;
use App\Models\Shot;
use App\Models\ShotsImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ShotController extends Controller
{
    public function upload()
    {
        return view('shots/upload', [
            'frameworks' => Framework::all()
        ]);       
    }

    public function store()
    {
        // dd("Sono qui");
        // request()->validate($this->rules());

        $shot = Shot::insertGetId([
            'user_id' => Auth::id(),
            'framework_id' => Request::get('framework'),
            'shots_type_id' => 1,
            'title' => Request::get('title'),
            'description' => Request::get('description'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if(Request::get('work-image')) {
            ShotsImage::create([
                'shot_id' => $shot,
                'name' => 'test',
                'url' => Request::get('work-image')
            ]);
        }

        return redirect('feed')->with('success', 'Shots has been uploaded');

    }

    public function storeImage(Request $request){
    	$file = Request::file('filepond');
    	return Storage::disk('public')->put('shots', $file);
    }

    protected function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'nullable|string',
            'user_id'     => 'required|integer',
            'framework_id' => 'required|integer',
            'code'     => 'nullable|string',
        ];
    }


}

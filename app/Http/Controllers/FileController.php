<?php
  
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
  
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'files' => 'required',
            'files.*' => 'required'
        ]);

        $files = [];
        if($request->hasfile('files'))
        {
            foreach($request->file('files') as $file)
            {
                $name = time().rand(1,100);
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
                //echo "Creating " . public_path('files') . '/example.txt'; 
                File::put(public_path('files') . '/' .$name.'.memo', 'UserName_'.now()->timestamp."_".$file->getClientOriginalName());
            }
        }
       return view('fileUpload');
       //return back()->with('success', 'Data Your files has been successfully added');
    }
}
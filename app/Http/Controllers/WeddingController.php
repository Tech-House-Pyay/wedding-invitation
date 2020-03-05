<?php

namespace App\Http\Controllers;
use App\Wedding;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class WeddingController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $wedding=Wedding::all();
        return view('wedding/index',compact('wedding'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $wedding=Wedding::all();
        return view('wedding/create',compact('wedding'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wedding=Wedding::create($this->validateRequest());


        $this->storeGallery($wedding,$request);
        $this->storeImage($wedding);
        $wedding->save();
        return redirect('/weddings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wedding $wedding)
    {
        return view('wedding/show',compact('wedding'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    private function validateRequest(){
        return request()->validate([
            'wdate'=>'required',
            'bname'=>'required|min:3',
            'gname'=>'required|min:3',
            'bgabout'=>'required|min:3',
            'bimage'=>'sometimes|file|image|max:5000',
            'gimage'=>'sometimes|file|image|max:5000',
            'bBio'=>'required|min:3',
            'gBio'=>'required|min:3',
            'mimage'=>'sometimes|file|image|max:5000',
            'mdate'=>'required',
            'meetText'=>'required|min:3',
            'timage'=>'sometimes|file|image|max:5000',
            'tdate'=>'required',
            'tripText'=>'required|min:3',
            'engimage'=>'sometimes|file|image|max:5000',
            'engdate'=>'required',
            'engtripText'=>'required|min:3',
            'bfimage'=>'sometimes|file|image|max:5000',
            'bfText'=>'required|min:3',
            'bmimage'=>'sometimes|file|image|max:5000',
            'bmText'=>'required|min:3',
            'bbimage'=>'sometimes|file|image|max:5000',
            'bbText'=>'required|min:3',
            'bsimage'=>'sometimes|file|image|max:5000',
            'bsText'=>'required|min:3',
            'gfimage'=>'sometimes|file|image|max:5000',
            'gfText'=>'required|min:3',
            'gmimage'=>'sometimes|file|image|max:5000',
            'gmText'=>'required|min:3',
            'gbimage'=>'sometimes|file|image|max:5000',
            'gbText'=>'required|min:3',
            'gsimage'=>'sometimes|file|image|max:5000',
            'gsText'=>'required|min:3',
            'gallery.*'=>'sometimes|file|image|max:20000',
            'wtime'=>'required',
            'wplace'=>'required|min:3',
            'wpartytime'=>'required',
            'wpartyplace'=>'required|min:3',
            'dtime'=>'required',
            'dplace'=>'required|min:3',

        ]);
    }
    private function storeImage($wedding)
    {

        if (request()->has('bimage')){

            $wedding->update([
                'bimage' => request()->bimage->store('uploads', 'public')
            ]);

        }
        if (request()->has('engimage')){

            $wedding->update([
                'engimage' => request()->engimage->store('uploads', 'public')
            ]);

        }
        if (request()->has('gimage')){

            $wedding->update([
                'gimage' => request()->gimage->store('uploads', 'public')
            ]);
        }
        $wedding -> save();
        if (request()->has('mimage')){
            $wedding->update([
                'mimage' => request()->mimage->store('uploads', 'public')
            ]);
        }
        if (request()->has('timage')){
            $wedding->update([
                'timage' => request()->timage->store('uploads', 'public')
            ]);
        }
        if (request()->has('bfimage')){
            $wedding->update([
                'bfimage' => request()->bfimage->store('uploads', 'public')
            ]);
        }
        if (request()->has('bmimage')){
            $wedding->update([
                'bmimage' => request()->bmimage->store('uploads', 'public')
            ]);
        }
        if (request()->has('bbimage')){
            $wedding->update([
                'bbimage' => request()->bbimage->store('uploads', 'public')
            ]);
        }
        if (request()->has('bsimage')){
            $wedding->update([
                'bsimage' => request()->bsimage->store('uploads', 'public')
            ]);
        }
        if (request()->has('gfimage')){
            $wedding->update([
                'gfimage' => request()->gfimage->store('uploads', 'public')
            ]);
        }
        if (request()->has('gmimage')){
            $wedding->update([
                'gmimage' => request()->gmimage->store('uploads', 'public')
            ]);
        }
        if (request()->has('gbimage')){
            $wedding->update([
                'gbimage' => request()->gbimage->store('uploads', 'public')
            ]);
        }
        if (request()->has('gsimage')){
            $wedding->update([
                'gsimage' => request()->gsimage->store('uploads', 'public')
            ]);
        }
        $wedding->save();
    }
    private function storeGallery($wedding,$request){
        $gallery = array();
        if ($files = $request->file('gallery')){
            foreach ($files as $file){
                $name = Str::random().'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('/uploads');
                if($file->move($destinationPath, $name)) {
                    $gallery[]= $name;

                }
            }
            $wedding->update([
                'gallery' => $gallery
            ]);


        }
    }

}

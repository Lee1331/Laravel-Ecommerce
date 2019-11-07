<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Pack;
use App\Http\Requests\StorePackRequest;
class PackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('manage-packs')){
            return redirect(route('login'));
        }

        $packs = Pack::all();
        return view('author.packs.index', compact('packs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('author.packs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackRequest $request)
    {

        // Retrieve the validated input data...
        $validated = $request->validated();

        $pack = Pack::create(['name' => request('name'),
            'description' => request('description'),
            'author_id' => auth()->id(),
            'cover_image' => request('cover_image')
        ]);

        $this->storeImage($pack);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pack $pack)
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
            'name' => 'required|min:3',
            'description' => 'required|min:25',
            'author_id' => 'required',
            'cover_image' => 'file|image|max:5000'
        ]);
    }

    private function storeImage($pack){
        if(request()->has('cover_image')){
            $pack->update([
                // 'cover_image' => request('cover_image')->store('packs', 'public')
                'cover_image' => request('cover_image')->storeAs('packs', $pack->name, 'public')
            ]);
        }
    }
}

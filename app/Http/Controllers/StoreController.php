<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'about' => 'required|string',
            'terms' => 'nullable|string',
            'phone' => 'required|string',
            'email' => 'nullable|email',
            'website' => 'nullable|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'logo' => 'nullable|file',
        ]);

        $logo = $request->file('logo');
        $logo_path = $this->storeImageLogo($logo);

        if($logo_path) {
            $data = $request->all();
            $data['logo'] = $logo_path;

            $db_response = $this->saveStoreInfo($data);

            if($db_response) {
                session()->flash('success', 'Your store details have been saved successfully. Now create your first product');

                return redirect()->route('home');
            }

            session()->flash('error', 'Could not save your store details');
            return back();
        }

    }

    private function saveStoreInfo($data)
    {
        return user()->stores()->create($data);
    }

    private function storeImageLogo($file)
    {
        return Storage::put('public/store_logos', $file, 'public');
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
}

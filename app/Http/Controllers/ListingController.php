<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('listing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $listings = new Listing();
        $listings->name = $request->name;
        $listings->user_id = auth()->user()->id;
        $listings->email = $request->email;
        $listings->phone = $request->phone;
        $listings->address = $request->address;
        $listings->website = $request->website;
        $listings->bio = $request->bio;
        $listings->save();

        session()->flash('success','List Create Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param Listing $listing
     * @return Application|Factory|View
     */
    public function show(Listing $listing)
    {
        return view('listing.show', compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Listing $listing
     * @return string
     */
    public function edit(Listing $listing)
    {
        return view('listing.edit', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Listing $listing
     * @return Void
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Listing $listing
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();

        session()->flash('success', 'List Delete Success!');
        return back();
    }
}

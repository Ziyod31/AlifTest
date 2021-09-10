<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = Email::simplePaginate(10);
        return view('emails.emails')->with('emails', $emails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

     $contacts = Contact::get();
     return view('emails.createUpdate')->with('contacts', $contacts);
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'value' => 'required|unique:emails',
            'contact_id' => 'required',                          
        ]);

        $params = $request->all();
        Email::create($params);

        return redirect('/emails')->with('success', 'Email was Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        $contacts = Contact::get();
        return view('emails.createUpdate', compact('email', 'contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        $this->validate($request, [
            'value' => 'required|unique:emails',
            'contact_id' => 'required',                          
        ]);

        $params = $request->all();
        $email->update($params);

        return redirect('/emails')->with('success', 'Email was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        $email->delete();
        return back()->with('success', 'Email was deleted');
    }
}

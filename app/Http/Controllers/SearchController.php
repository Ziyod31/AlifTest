<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');

        $contacts = Contact::query()
        ->where('name', 'LIKE', '%' . $request->search . '%')
        ->orWhere('surname', 'LIKE', '%' . $request->search . '%')
        ->get();

        return view('search', compact('contacts'));
    }

    public function reset()
    {
        Artisan::call('migrate:fresh --seed');

        return view('index')->with('success', 'Tables where reset');
    }
}
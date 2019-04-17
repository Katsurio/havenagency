<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\StoreContact;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(5);
        $items = $request->items ?? 5;
        return view('contacts.index', compact('contacts', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContact $request
     * @return RedirectResponse|Response
     */
    public function store(StoreContact $request)
    {
        try {
            $contact = Contact::storeContact($request->all());
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                return Redirect::back()->withErrors('Duplicate Email. Please select a different email.')->withInput();
            }
        }
        return redirect('/contacts')->with('success', 'Contact Saved.')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreContact $request
     * @param Contact $contact
     * @return RedirectResponse|Response
     */
    public function update(StoreContact $request, Contact $contact)
    {
        try {
            $contact->updateContact($request->all());
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                return Redirect::back()->withErrors('Duplicate Email. Please select a different email.')->withInput();
            }
        }
        return redirect('/contacts')->with('success', 'Contact Updated.')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contacts')->with('success', 'Contact Deleted.');
    }

    /**
     * Search for contact
     *
     * @param Request $request
     * @return Response
     */
    public function search(Request $request)
    {
        $q = $request->q;
        $items = $request->items ?? 5;
        $contacts = Contact::where('first_name', 'LIKE', '%' . $q . '%')->orWhere('email', 'LIKE', '%' . $q . '%')->paginate($items);
        return view('contacts.index', compact('contacts', 'items'));
    }
}

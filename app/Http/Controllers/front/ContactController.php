<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\front\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected function val ($request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'msg' => 'required',
        ]);
    }

    public function new (Request $request)
    {
        $this->val($request);
        $contact    = new Contact();

        $contact->name      = $request->name;
        $contact->email      = $request->email;
        $contact->phone      = $request->phone;
        $contact->msg      = $request->msg;
        $contact->save();

        return redirect()->back()->with('message', 'Your message has been sent successfully. Thanks for your contact request.');
    }

    public function mng ()
    {
        $contacts   = Contact::orderBy('id', 'DESC')->get();
        return view('admin.contact.mng', [
            'contacts' => $contacts,
        ]);
    }
    public function del ($id)
    {
        $contact    = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->back()->with('msg', 'deleted successfully');
    }
    public function status ($id)
    {
        $contact    = Contact::findOrFail($id);
        if ($contact->status == 1)
        {
            $contact->status = 0;
        } else {
            $contact->status = 1;
        }
        $contact->save();
        return redirect()->back()->with('msg', 'Status Changed successfully');
    }
}

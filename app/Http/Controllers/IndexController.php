<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    //

    public function home()
    {

        return inertia('Home');
    }

    public function project()
    {
        $projects = Project::where('status', true)->with('skills', function ($query) {
            $query->select('image', 'name', 'type');
        })
        ->orderBy('id','desc')
        ->get();
        return inertia('Project', compact('projects'));
    }

    public function contact()
    {

        return inertia('Contact');
    }

    public function storeContact(StoreContactRequest $request): RedirectResponse
    {
        $request->validated();

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        if ($contact) {
            Mail::to(config('mail.from.address'))->send(new ContactMail([
                'subject' => 'Mail from thapa.dev',
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]));
        }

        return Redirect::route('contact')->with('success', 'Thanks for your message. I\'ll be in touch soon as possible.');
    }
}

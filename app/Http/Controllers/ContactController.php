<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.kontak.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        $contact = Contact::create($request->all());

        Mail::to('raflyjuliano62@gmail.com')->send(new ContactNotification($contact));

        return redirect('/#contact')->with('success', 'Pesan berhasil dikirim! Terima kasih telah menghubungi saya.');
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('kontak.index')->with('success', 'Pesan berhasil dihapus.');
    }
}

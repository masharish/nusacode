<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use File;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftar_contact = Contact::all();
        return view('contacts.index', ['daftar_contact' => $daftar_contact]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'description' => 'required',            
            'foto' => 'required|mimes:png,jpg|max:2048',
        ]);

        $fileName = time().'.'.$request->foto->extension();

        $request->foto->move(public_path('uploads'), $fileName);

        $contact = new Contact;

        $contact->nama = $request->nama;
        $contact->alamat = $request->alamat;
        $contact->description = $request->description;
        $contact->telp = $request->telp;
        $contact->foto = $fileName;
        $contact->created_at = date('Y-m-d');
        $contact->updated_at = date('Y-m-d H:00');
        $contact->save();
        return redirect()->route('contacts.index')->with('success', 'Berhasil menyimpan data kontak');
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        // $contact = Contact::find($id);
        return view('contacts.detail', ['contact'=>$contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
        return view('contacts.edit', ['contact'=>$contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'description' => 'required',
            'foto' => 'nullable|mimes:png,jpg|max:2048',
        ]);
    
        // Check if a new file is uploaded
        if ($request->has('foto')) {
            // Delete the old file if exists
            if (File::exists(public_path('uploads/' . $contact->foto))) {
                File::delete(public_path('uploads/' . $contact->foto));
            }
    
            // Upload the new file
            $fileName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('uploads'), $fileName);
    
            // Update the file name in the contact
            $contact->foto = $fileName;
        }
    
        // Update other fields
        $contact->nama = $request->nama;
        $contact->alamat = $request->alamat;
        $contact->description = $request->description;
        $contact->telp = $request->telp;
        $contact->updated_at = date('Y-m-d H:00');
    
        $contact->save();
    
        return redirect()->route('contacts.index')->with('success', 'Berhasil memperbarui data kontak');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
        // Hapus file foto jika ada
    if ($contact->foto && File::exists(public_path('uploads/' . $contact->foto))) {
        File::delete(public_path('uploads/' . $contact->foto));
    }

    // Hapus data kontak dari basis data
    $contact->delete();

    // Redirect ke halaman daftar kontak dengan pesan sukses
    return redirect()->route('contacts.index')->with('success', 'Berhasil menghapus data kontak');
    }
}

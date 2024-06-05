<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::latest()->paginate(5);
        return view('notes.index', compact('notes'));
    }



    public function create() : View{
        return view('notes.create');
    }

    public function store(Request $request): RedirectResponse{

        $request->validate([
            'judul' => 'required|max:255|min:10',
            'konten' => 'required|min:20'
        ]);

        Note::create([
            'judul' => $request->judul,
            'konten' => $request->konten
        ]);

        return redirect()->route('notes.index')->with(['success'=>'Data Berhasil Disimpan']);
    }



    public function edit(string $id) : View{
        $notes = Note::findOrFail($id);
        return view('notes.edit', compact('notes'));
    }

    public function update(Request $request, string $id): RedirectResponse{
        $request->validate([
            'judul' => 'required|max:255|min:10',
            'konten' => 'required|min:20'
        ]);

        $notes = Note::findOrFail($id);

        $notes->update([
            'judul' => $request->judul,
            'konten' => $request->konten
        ]);

        return redirect()->route('notes.index')->with(['success'=>'Data Berhasil Diubah']);
    }

    public function destroy($id): RedirectResponse{
        $notes = Note::findOrFail($id);
        $notes -> delete();
        return redirect()->route('notes.index')->with(['success'=>'Data Berhasil Dihapus']);
    }
}

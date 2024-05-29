<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Calender;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class CalenderController extends Controller
{
    public function index()
    {
        $calenders = Calender::latest()->paginate(5);
        return view('calenders.index', compact('calenders'));
    }

    public function create() : View{
        return view('calenders.create');
    }

    public function store(Request $request): RedirectResponse{

        $request->validate([
            'aktivitas' => 'required|string|max:100|min:10',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after:tanggal_mulai',
        ]);

        Calender::create([
            'aktivitas' => $request->aktivitas,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
        ]);

        return redirect()->route('calenders.index')->with(['success'=>'Aktivitas Berhasil Disimpan']);
    }

    public function destroy($id): RedirectResponse{
        $calenders = Calender::findOrFail($id);
        $calenders -> delete();
        return redirect()->route('calenders.index')->with(['success'=>'Aktivitas Berhasil Dihapus']);
    }

    public function activate($id)
    {
        $calender = Calender::findOrFail($id);
        $calender->status = true;
        $calender->save();
        return redirect()->back()->with('success', 'Kalender berhasil diupdate');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PortalApp;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $apps = PortalApp::orderBy('sort_order', 'asc')->get();
        return view('Admin.admin', compact('apps'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'icon' => 'required|string',
            'desc' => 'nullable|string',
            'btn_text' => 'required|string|max:255',
            'btn_class' => 'required|string|max:255',
            'bg_class' => 'required|string|max:255',
            'sort_order' => 'required|integer',
        ]);

        PortalApp::create($validated);

        return redirect()->route('admin.index')->with('success', 'Aplikasi berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $app = PortalApp::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'icon' => 'required|string',
            'desc' => 'nullable|string',
            'btn_text' => 'required|string|max:255',
            'btn_class' => 'required|string|max:255',
            'bg_class' => 'required|string|max:255',
            'sort_order' => 'required|integer',
        ]);

        $app->update($validated);

        return redirect()->route('admin.index')->with('success', 'Aplikasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $app = PortalApp::findOrFail($id);
        $app->delete();

        return redirect()->route('admin.index')->with('success', 'Aplikasi berhasil dihapus!');
    }
}

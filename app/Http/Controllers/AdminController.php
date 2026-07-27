<?php

namespace App\Http\Controllers;

use App\Models\PortalApp;
use App\Models\TrafficLog;
use App\Models\PortalAppClick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function index()
    {
        $apps = PortalApp::orderBy('sort_order', 'asc')->get();

        $totalHits = 0;
        $uniqueVisitors = 0;
        $totalClicks = 0;
        $appStats = collect();
        $dailyTraffic = collect();

        if (Schema::hasTable('traffic_logs')) {
            $totalHits = TrafficLog::count();
            $uniqueVisitors = TrafficLog::distinct('ip_address')->count('ip_address');
        }

        if (Schema::hasTable('portal_app_clicks')) {
            $totalClicks = PortalAppClick::count();
        }

        if (Schema::hasTable('portal_apps') && Schema::hasTable('portal_app_clicks')) {
            $appStats = PortalApp::leftJoin('portal_app_clicks', 'portal_apps.id', '=', 'portal_app_clicks.portal_app_id')
                ->selectRaw('
                    portal_apps.id, 
                    portal_apps.name, 
                    portal_apps.url,
                    portal_apps.icon,
                    portal_apps.bg_class,
                    COUNT(portal_app_clicks.id) as total_clicks,
                    COUNT(DISTINCT portal_app_clicks.ip_address) as unique_users
                ')
                ->groupBy('portal_apps.id', 'portal_apps.name', 'portal_apps.url', 'portal_apps.icon', 'portal_apps.bg_class')
                ->orderByRaw('total_clicks DESC, portal_apps.sort_order ASC')
                ->get();
        } else {
            $appStats = $apps->map(function($app) {
                $app->total_clicks = 0;
                $app->unique_users = 0;
                return $app;
            });
        }

        if (Schema::hasTable('traffic_logs')) {
            $dailyTraffic = TrafficLog::selectRaw('DATE(created_at) as date, COUNT(*) as hits, COUNT(DISTINCT ip_address) as unique_visitors')
                ->groupBy('date')
                ->orderBy('date', 'desc')
                ->limit(7)
                ->get()
                ->reverse()
                ->values();
        }

        return view('Admin.admin', compact('apps', 'totalHits', 'uniqueVisitors', 'totalClicks', 'appStats', 'dailyTraffic'));
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

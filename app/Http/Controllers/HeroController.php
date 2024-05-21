<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::orderBy('hero_name')->get();
        return view('landing', compact('heroes'));
    }

    // Generate PDF
    public function pdf() {
        $heroes = Hero::orderBy('id', 'asc')->get();
        $pdf = Pdf::loadView('hero-list', compact('heroes'));
        return $pdf->stream('hero-list.pdf');
    }

    // generate csv
    public function generateCSV() {
        $heroes = Hero::select('hero_name', 'type', 'role')->orderBy('hero_name')->get();
        $filename = '../storage/heroes.csv';
        $file = fopen($filename, 'w+');

        foreach($heroes as $hero) {
            fputcsv($file, [
                $hero->hero_name,
                $hero->type,
                $hero->role
            ]);
        }

        fclose($file);
        return response()->download($filename);
    }
    // import csv
    public function importCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);
        $file = $request->file('csv_file');
        $csvData = array_map('str_getcsv', file($file));

        foreach ($csvData as $row) {
            $heroName = $row[0];
            $type = $row[1];
            $role = $row[2];

            Hero::updateOrCreate(

                ['hero_name' => $heroName,
                 'type' => $type,
                 'role' => $role]
            );

        }
        return redirect()->route('heroes.index')->with('success', 'Heroes imported successfully.');
    }

    // import sql
    public function importSql(Request $request)
{
    $request->validate([
        'sql_file' => 'required|file|mimes:sql',
    ]);

    $file = $request->file('sql_file');
    $sqlContent = file_get_contents($file->getRealPath());
    DB::unprepared($sqlContent);

    Log::info('SQL file imported successfully.');

    return view('database', compact('data'));
}

public function showDatabase()
{
    $data = Hero::all();

    return view('database', compact('data'));
}


}

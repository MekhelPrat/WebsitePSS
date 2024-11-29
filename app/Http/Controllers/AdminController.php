<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->isMethod('get')) {
            return view('admin.store'); // For GET requests
        }

        if ($request->isMethod('post')) {
            // Validasi data
            $request->validate([
                'title' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Simpan file gambar
            $image = time() . '.' . $request->image->extension(); // Generate a unique file name
            $request->image->move(public_path('assets'), $image); // Save the file in the public folder
    

            // Simpan data ke database
            $item = Event::create([
                'title' => $request->input('title'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'image' => 'assets/' . $image,
            ]);

            // return response()->json([
            //     'message' => 'Item successfully added!',
            //     'data' => $item,
            // ], 201);

            return redirect()->route('admin.index')->with('success', 'Store added successfully!');
        }
    }

    public function storeBerita(Request $request)
    {

        if ($request->isMethod('get')) {
            return view('admin.berita'); // For GET requests
        }

        if ($request->isMethod('post')) {
            // Validasi data
            $request->validate([
                'title' => 'required|string|max:255',
                'date' => 'required|date',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Simpan file gambar
            $image = time() . '.' . $request->image->extension(); // Generate a unique file name
            $request->image->move(public_path('assets'), $image); // Save the file in the public folder
    

            // Simpan data ke database
            $item = Berita::create([
                'title' => $request->input('title'),
                'date' => $request->input('date'),
                'description' => $request->input('description'),
                'image' => 'assets/' . $image,
            ]);

            dd($item);
            // return response()->json([
            //     'message' => 'Item successfully added!',
            //     'data' => $item,
            // ], 201);

            return redirect()->route('admin.index')->with('success', 'Store added successfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

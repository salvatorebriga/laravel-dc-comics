<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('welcome', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {

        Comic::create([
            'title' => $request->title,
            'description' => $request->description,
            'thumb' => $request->thumb,
            'price' => $request->price,
            'series' => $request->series,
            'sale_date' => $request->sale_date,
            'type' => $request->type,
            'artists' => json_encode(explode(',', $request->artists)),
            'writers' => json_encode(explode(',', $request->writers)),
        ]);

        return redirect()->route('Home')->with('success', 'Comic added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, string $id)
    {
        $comic = Comic::findOrFail($id);
        $comic->title = $request->input('title');
        $comic->description = $request->input('description');
        $comic->price = $request->input('price');
        $comic->series = $request->input('series');
        $comic->sale_date = $request->input('sale_date');
        $comic->type = $request->input('type');
        $comic->artists = json_encode(explode(', ', $request->input('artists')));
        $comic->writers = json_encode(explode(', ', $request->input('writers')));
        $comic->save();

        return redirect()->route('comics.show', $comic->id)->with('success', 'Comic updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('Home')->with('success', 'Comic deleted successfully');
    }
}

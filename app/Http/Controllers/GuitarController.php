<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webshop = Guitar::paginate(10);

        return view('guitars_table.index',compact('webshop'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guitars_table.create');

      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Validate input

        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'type' => 'required',
            'color' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'image_path' => 'nullable|file',
            
        ]);
        // Dohvata sve podatke Provjera postoji li fajl prije svega bila bi dobra stvar.
        $requestData = $request->all();

        //Generira jedinstveno ime za sliku
        $fileName = time().$request->file('image_path')->getClientOriginalName();

        //Pohranjuje sliku unutar guitar_image direktorija
        $path = $request->file('image_path')->storeAs('guitar_images', $fileName, 'public');

        // Azurira putanju u podatcima da bi sadrzavala putanju do slike u db
        $requestData["image_path"] = '/storage/'.$path;

        // Stvaranje instance modela sa auziriranim podatcima
        Guitar::create($requestData);

        // Preusmjeravanje na rutu.
        return redirect()->route('guitars_table.index');

    }

    /**
     * Display the specified resource.
     * Traženje po id-ju RESETACIJA ID-A KAD SE JEDAN IZBRIŠE. i $request sta znaci malo pogledaj i raspitaj se o svemu uredi fino i napravi commit.uitar
     */
    public function show($id)
    {
        

        $guitar = Guitar::find($id);
        return view('guitars_table.show',compact('guitar'));
    }

    /**
     * Show the form for editing the specified resource. Moze na foru id-a
     */
    public function edit($id)
    {   
        $guitar = Guitar::find($id);                                      
        return view('guitars_table.edit',compact('guitar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guitar $guitar, $id)
    {
        //Validate input PROVJERI I PRILAGODI SITUACIJU
    $request->validate([
        'brand' => 'required',
        'model' => 'required',
        'type' => 'required',
        'color' => 'required',
        'description' => 'required',
        'price' => 'required',
        'stock' => 'required',
        'image_path' => 'nullable|file',
    ]);

    // Dohvati postojeću gitaru
    $guitar = Guitar::find($id);

    // Ako postoji nova slika, ažuriraj sliku
    if ($request->hasFile('image_path')) {
        // Generiraj jedinstveno ime za sliku
        $fileName = time().$request->file('image_path')->getClientOriginalName();
        
        // Pohrani sliku unutar guitar_image direktorija
        $path = $request->file('image_path')->storeAs('guitar_images', $fileName, 'public');
        
        // Ažuriraj putanju u podatcima da sadržava putanju do nove slike u db
        $guitar->image_path = '/storage/'.$path;
    }

    // Ažuriraj ostale podatke
    $guitar->update($request->except('image_path'));

    // Preusmjeri na rutu.
    return redirect()->route('guitars_table.index');

        
    }

    /**
     * Remove the specified resource from storage.
     * Može i $request a može i $id, sa $id je jednostavnije.
     */
    public function destroy($id)
    {
        $guitar = Guitar::find($id);
        $guitar->delete();
        return redirect()->route('guitars_table.index');
      
    }
}

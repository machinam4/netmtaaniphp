<?php

namespace App\Http\Controllers;

use App\Models\Soko;
use App\Models\Soko_sections;
use App\Models\TemporaryFiles;
use Illuminate\Http\Request;
use App\Models\soko_images;
use App\Models\Soko_categories;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function stats()
    {
        return view('admin.stats');
    }

    // soko routes
    public function soko_items(Soko_sections $section)
    {
        $items = Soko::where('section_id', $section->id)->get();
        return view('admin.soko.items', ['items' => $items]);
    }

    public function create(Request $request) //return create view
    {
        $categories = Soko_categories::all();
        $soko = Soko::all();
        return view('admin.soko.create', ['sokos' => $soko, 'categories' => $categories]);
    }

    // saves the soko section created - Post Method
    public function sections(Request $request)
    {
        // save the new records
        $thumbnail = $request->file('thumbnail')->store('/sokos/images');
        $data = [
            'name' => $request->name,
            'thumbnail' => $thumbnail,
        ];
        Soko_sections::create($data);

        // fetch data to send to view
        return redirect()->route('soko_create');
    }

    // saves the soko category created - Post Method
    public function categories(Request $request)
    {
        // save the new records
        $thumbnail = $request->file('thumbnail')->store('/sokos/images');
        $data = [
            'soko_sections_id' => $request->section_id,
            'name' => $request->name,
            'thumbnail' => $thumbnail,
        ];
        Soko_categories::create($data);

        // fetch data to send to view
        return redirect()->route('soko_create');
    }

    // saves the soko item / product created
    public function save(Request $request)
    {

        // dd($request);
        // save the new records
        $sokoItem = Soko::firstOrCreate(
            [
                'item_no' => $request->item_no,
            ],
            [
                'name' => $request->name,
                'section_id' => $request->section_id,
                'subcategory' => $request->subcategory,
                'price' => $request->price,
                'model' => $request->model,
                'status' => $request->status,
                'description' => $request->description,
                'soko_categories_id' => $request->category_id,
            ]
        );


        $sokoItem->save();
        // upload the images
        // dd($request->file('images'));
        foreach ($request->images as $imageFile) {
            $file = TemporaryFiles::find($imageFile);
            // dd($imageFile);
            $image = new soko_images;
            Storage::move($file->folder, '/sokos/images/' . $file->file);
            $path = '/sokos/images/' . $file->file;
            $image->name = $path;
            $image->soko_id = $sokoItem->id;
            $image->sokos_id = $sokoItem->id;
            $image->save();
            $file->delete();
        }

        // fetch data to send to view
        return redirect()->route('soko_create');
    }

    public function editItem(Soko $item) //send the edit view
    {
        $categories = Soko_categories::all();
        return view('admin.soko.edit', ['categories' => $categories, 'item' => $item]);
    }

    public function updateItem(Request $request, Soko $item) //update the item
    {
        // dd($request->all());
        $item->update($request->all());
        $items = Soko::all();
        return view('admin.soko.items', ['items' => $items]);
    }

    public function deleteItem(Soko $item)
    {
        foreach ($item->images as $image) {
            // dd($image->name);
            Storage::delete($image->name);
            $image->delete();
        }
        $item->delete();
        return 'ok';
    }
}

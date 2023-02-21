<?php

namespace App\Http\Controllers;

use App\Models\Adverts;
use App\Models\Soko_sections;
use App\Models\TemporaryFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvertsController extends Controller
{
    //

    public function index()
    {
        return view('admin.adverts.items');
    }
    public function adverts()
    {
        $items = Adverts::all();
        return view('admin.adverts.items', ['items' => $items]);
    }

    public function create()
    {
        $items = Adverts::all();
        return view('admin.adverts.create', ['items' => $items]);
    }
    public function save(Request $request)
    {
        $path = $request->link;
        if ($request->type != "link") {
            $file = TemporaryFiles::find($request->image);
            Storage::move($file->folder, '/content2/images/' . $file->file);
            $path = '/content2/images/' . $file->file;
        }
        $advertItem = Adverts::firstOrCreate(
            [
                'advert_no' => $request->advert_no,
            ],
            [
                'name' => $request->name,
                'type' => $request->type,
                'link' => $path,
                'owner' => $request->owner,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                // 'tags' => $request->tags,
                'position' => $request->position,
                'duration' => $request->duration,
                'status' => $request->status,
            ]
        );

        $advertItem->save();
        if ($request->type != "link") {
            Storage::delete($file->folder);
            $file->delete();
        }

        return redirect()->route('admin_adverts_items');
    }

    public function editItem(Adverts $item) //send the edit view
    {
        return view('admin.adverts.edit', ['item' => $item]);
    }

    public function updateItem(Request $request, Adverts $item) //update the item
    {
        $item->update($request->all());
        return redirect()->route('admin_adverts_items');
    }

    public function deleteItem(Adverts $item)
    {
        if ($item->type != "link") {
            Storage::delete($item->link);
        }

        $item->delete();
        return redirect()->route('admin_adverts_items');
    }
}

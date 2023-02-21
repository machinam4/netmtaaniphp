<?php

namespace App\Http\Controllers;

use App\Models\Soko as ModelsSoko;
use App\Models\Soko_categories;
use App\Models\Soko_sections;
use Illuminate\Http\Request;
use visits;

// use Soko;

class SokoController extends Controller
{
  // soko index route
  // returns soko sections
  public function index(Request $request)
  {
    $sections = Soko_sections::all();
    return view('Soko.home', ['sections' => $sections]);
  }
  // returns soko categories in the requested soko section - get method
  public function section(Request $request, Soko_sections $section)
  {
    visits($section)->increment();
    $categories = $section->categories->all();
    return view('Soko.categories', ['categories' => $categories]);
  }

  // returns soko items in the requested soko categories in the section - get method
  public function category(Request $request, Soko_sections $section, Soko_categories $category)
  {

    visits($category)->increment();

    //  DB::listen(function($query){
    //     dump($query->sql);
    //   });
    // $soko_items = $category->sokos->load();
    $filter_fields = ModelsSoko::select('subcategory', 'model')->where('soko_categories_id', $category->id)->distinct()->get();

    // filter records found
    $f_subcategory = $request->query('subcategory') ? $request->query('subcategory') : array("%", "");
    $f_model = $request->query('model') ? $request->query('model') : array("%", "");
    $f_min = $request->query('min') ? $request->query('min') : "%";
    $f_max = $request->query('max') ? $request->query('max') : "%";

    // dd($f_min, $f_max, $f_model, $f_subcategory);
    $filtered_items = $category->sokos->whereIn('model', $f_model)->whereIn('subcategory', $f_subcategory)->whereBetween('price', [$f_min, $f_max]);
    // dd($request->query('model'));
    // dump($filtered_items);

    $allItems = $category->sokos->all();
    // dd($allItems);


    $soko_items = $filtered_items->all();




    return view('Soko.list', ['soko_items' => $allItems, 'category' => $category, 'filters' => $filter_fields]);
  }

  // soko item get method - returns single soko item
  public function sokos_item(Request $request, Soko_sections $section, Soko_categories $category, ModelsSoko $soko)
  {
    visits($soko)->increment();
    return view('Soko.single', ['section' => $section, 'category' => $category, 'soko_item' => $soko]);
  }

  // soko item create form
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMenuRequest;
use App\Http\Requests\Admin\UpdateMenuRequest;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:menu list', ['only' => ['index']]);
        $this->middleware('can:menu create', ['only' => ['create', 'store']]);
        $this->middleware('can:menu edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:menu delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $menus = (new Menu)->newQuery();

        if (request()->has('search')) {
            $menus->where('name', 'Like', '%'.request()->input('search').'%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $menus->orderBy($attribute, $sort_order);
        } else {
            $menus->latest();
        }

        $menus = $menus->paginate(5);

        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreMenuRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreMenuRequest $request)
    {
        Menu::create([
            'link' => $request->link,
            'name' => $request->name,
            'weight' => $request->weight,
        ]);

        return redirect()->route('menu.index')
                        ->with('message', 'Menu created successfully.');
    }
    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', compact('menu'));
    }
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->update($request->all());

        return redirect()->route('menu.index')
                        ->with('message', 'Menu updated successfully.');
    }
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menu.index')
                        ->with('message', __('Menu deleted successfully'));
    }

}

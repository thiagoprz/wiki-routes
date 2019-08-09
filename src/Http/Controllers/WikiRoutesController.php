<?php

namespace Thiagoprz\WikiRoutes\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Thiagoprz\WikiRoutes\Components\WikiWebService;
use Thiagoprz\WikiRoutes\Models\WikiRoute;

/**
 * HereGeocoderController
 * @package Thiagoprz\HereGeocoder\Http\Controllers
 */
class WikiRoutesController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $items = WikiRoute::orderBy('updated_at', 'DESC')
            ->orderBy('created_at', 'DESC')
            ->paginate();
        $service = new WikiWebService();
        $service->login();
        $wiki_pages = $service->getAllPages();
        return view('wiki-routes::index', compact('items'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'route' => 'required|string',
            'link' => 'required|string',
        ]);
        WikiRoute::create($request->only(['route', 'link']));
        return redirect();
    }
}
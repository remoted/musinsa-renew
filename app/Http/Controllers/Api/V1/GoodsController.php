<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use App\Http\Requests\StoreGoodsRequest;
use App\Http\Requests\UpdateGoodsRequest;
use App\Filters\V1\GoodsFilter;
use App\Http\Resources\V1\GoodsCollection;
use App\Http\Resources\V1\GoodsResource;


class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filter = new GoodsFilter();
        $queryItems = $filter->transform($request); //[['column', 'operator', 'value']]

        if (count($queryItems) == 0) {
            return new GoodsCollection(Goods::paginate());
        } else {
            $goods = Invoice::where($queryItems)->paginate();

            return new GoodsCollection($goods->appends($request->query()));

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGoodsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoodsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function show(Goods $goods)
    {
        return new GoodsResource($goods);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function edit(Goods $goods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoodsRequest  $request
     * @param  \App\Models\Goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoodsRequest $request, Goods $goods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goods $goods)
    {
        //
    }
}

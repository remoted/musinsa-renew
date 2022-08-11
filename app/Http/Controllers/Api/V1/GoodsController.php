<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\GoodsCollection;
use App\Http\Resources\V1\GoodsResource;
use App\Filters\V1\GoodsFilter;
use App\Http\Requests\V1\StoreGoodsRequest;
use App\Http\Requests\V1\UpdateGoodsRequest;
use Illuminate\Support\Arr;
use App\Http\Requests\V1\BulkStoreGoodsRequest;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new GoodsFilter();
        $queryItems = $filter->transform($request); //[['column', 'operator', 'value']]

        if (count($queryItems) == 0) {
            return new GoodsCollection(Goods::paginate());
        } else {
            $goods = Goods::where($queryItems)->paginate();

            return new GoodsCollection($goods->appends($request->query()));

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGoodsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoodsRequest $request)
    {
        return new GoodsResource(Goods::create($request->all()));
    }

    
    public function bulkStore(BulkStoreGoodsRequest $request){
        $bulk = collect($request->all())->map(function($arr, $key) {
          return Arr::except($arr, ['customerId', 'registedDate', 'updateDate']);
        });

      Goods::insert($bulk->toArray());
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
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoodsRequest  $request
     * @param  \App\Models\Goods  $goods
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id){

      $goods = Goods::find($id);
      $goods->name = $request->name;
      $goods->comment = $request->comment;
      $goods->customer_id = $request->customerId;
      $goods->registed_date = $request->registedDate;
      $goods->update_date = $request->updateDate;

      $goods->save();

      return response()->json($goods);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $goods = Goods::find($id);
      $goods->delete();
      
      return response()->json("Goods removed successfully.");
    }
}

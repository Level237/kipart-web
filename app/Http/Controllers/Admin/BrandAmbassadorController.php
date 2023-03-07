<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\services\admin\DetailsServices;
use App\services\api\brandAmbassador\ListBrandServices;
use App\services\api\brandAmbassador\CreateBrandServices;

class BrandAmbassadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailsUser=(new DetailsServices())->getUserDetails();
        $response=json_decode($detailsUser->getBody());
        $listBrand=(new ListBrandServices())->list();
        $datas=json_decode($listBrand->getBody());

        if(!isset($response->errors)){

            //return $detailsUser;
            return view('admin.brand.index',compact('detailsUser','datas'));
        }else{
            return to_route('admin.login');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detailsUser=(new DetailsServices())->getUserDetails();
        $response=json_decode($detailsUser->getBody());
        if(!isset($response->errors)){

            //return $detailsUser;
            return view('admin.brand.create',compact('detailsUser'));
        }else{
            return to_route('admin.login');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createBrand=(new CreateBrandServices())->create($request);

        return to_route('admin.brandGirls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

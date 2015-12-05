<?php

namespace App\Http\Controllers;

use App\PrettyJson;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use PulkitJalan\GeoIP\Facades\GeoIP;


class GeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pretty = new PrettyJson();
/*
        $setIP = '1.46.41.229 ';

        GeoIP::setIp($setIP);

        $datajson = json_encode(GeoIP::get(), true);

*/

        //$server = $_SERVER['HTTP_X_FORWARDED_FOR'];
        GeoIP::get( );


        $headers = '';
        $agent = new Agent();

        $userAgent = $agent->setUserAgent();
        $userIP =  GeoIP::get();


        $isDesktop = json_decode($agent->isDesktop());
        $device = $agent->getUserAgent();//device();

        return $pretty->format_json($userAgent,true);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

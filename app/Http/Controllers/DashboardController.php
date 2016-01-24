<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Datatable;
use App\Models\User;
use GuzzleHttp\Client;
use Fromz\FromzPackage\FromzJson;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'allkeys' => '0',//$allkeys,
            'allproducts' => '0',//$allproducts,
            'keyactive' => '0',
            'keypedding' => '0',
            'text_allkeys'=> 'Total Keys',
            'text_allproducts'=> 'Total Product',
            'text_keyactive'=>' Keys',
            'text_keypedding'=>'Pedding Keys'
        ];
        return view('dashboard.index', $data);
    }

    public function getMap()
    {
        return view('dashboard.map');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getStart()
    {
        return view('dashboard.start');
    }
    public function postRest()
    {
        $client = new Client();
        $response = $client->post('https://api.iinbrand.com/service/',
                $body = [
                    'keys' => 'VKSD-TB6Y-R2FB-AYH8',
                    'location' => '12.3456,00.111111'
                ]

        );
        $body = $response->send();
        $content = view('pages.info')->with('service',json_decode($body, TRUE));
        return view($content, 'service OK');
    }
    
    
    public function getRest() {

        $url = 'https://api.iinbrand.com/service/';
        $body = [
            'keys'    => 'VKSD-TB6Y-R2FB-AYH8',
            'location' => '12.3456,00.111111'
        ];
		$fromzJson = new FromzJson();
        $client = new Client([
             'base_uri' => $url,
            //'timeout'  => 2.0,
            //'debug'    => true
        ]);

        $response = $client->request('POST', $url ,[ 'body' => json_encode($body,true)]);

        $result = $response->getBody();
        
        $code = $response->getStatusCode();
        
        $output = [
        	'data' => json_decode($result),
        	'statuscode' => $code
        	];

        return $fromzJson->format_json(json_encode($output),true);
    }
    
    
    
    public function getRegister()
    {
        return view('adminlte::register');
    }

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

    public function getDatatable()
    {
        $datatable = Datatable::collection(User::all(array('id','first_name')))
            ->showColumns('id', 'first_name')
            ->searchColumns('first_name')
            ->orderColumns('id','first_name')
            ->make();

        return $datatable;
    }
}

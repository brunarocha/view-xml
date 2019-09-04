<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadXmlController extends Controller
{

    public function create()
    {
        return view('import.create');
    }

    public function store(Request $request)
    {
        $xml = simplexml_load_file($request->file('file'));
        $newList = [];

        foreach($xml as $row){
            $obj = new \stdClass;
            $obj = $row;

            array_push($newList, $obj);
        }

        //dd($newList);

        return view('import.show')->with('items', $newList);
    }

   /* public function SimpleXML2Array($xml){
        $array = $xml;

        //recursive Parser
        foreach ($array as $key => $value){
            if(strpos(get_class($value),"SimpleXMLElement")!==false){
                $array[$key] = $this->SimpleXML2Array($value);
                //$array[$key] = $value;
            }
        }

        $l = [];

        foreach ($array as $key => $value){
            array_push($l,
                "<label>$key: $value</label>");
        }

        return $array;
    }*/

    /*public function SimpleXML2Array($xml){
        //$array = (array)$xml;
        $array = $xml;

        //recursive Parser
        foreach ($array as $key => $value){
            if(strpos(get_class($value),"SimpleXMLElement")!==false){
                $array[$key] = $this->SimpleXML2Array($value);
                //$array[$key] = $value;
            }
        }

        return $array;
    }*/
}

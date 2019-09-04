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

            //$obj = $this->SimpleXML2Array($row);

            array_push($newList, $obj);
        }

        //$array = $this->SimpleXML2Array($newList);

        /*foreach($array as $key => $value){
            //var_dump($key );
            foreach(get_object_vars($value) as $val){
                var_dump($val);
            }


            var_dump('<br>');
        }*/

        //dd($newList);

        //dd($this->SimpleXML2Array($newList));
        //dd(get_object_vars([0]));

        //dd($newList);

        return view('import.show')->with('items', $newList);

        dd('FIM');
    }

    public function SimpleXML2Array($xml){
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
    }

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

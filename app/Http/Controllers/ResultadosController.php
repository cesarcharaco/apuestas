<?php

namespace App\Http\Controllers;
use Goutte\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
class ResultadosController extends Controller
{
    public function welcome()
    {
    	$client = new Client();
    	$crawler=$client->request('GET','https://www.resultados-futbol.com');
    	
    	//dd($crawler);
    	$content=$crawler->filter(".partdesta")->first();
    	//dd($content->html());

		
    	/*$content=$crawler->filter(".partdesta")->each(function (Crawler $partidos,$i) {
		    $jornada=$partidos->filter(".jornada")->first();
		    echo $jornada->text()."</br>";
		    $divs=$partidos->children()->filter('div');
		    $div
		echo $partidos->html();
		

		});*/

		//dd('----------------');
    	return view('welcome',compact('content'));
    }
}

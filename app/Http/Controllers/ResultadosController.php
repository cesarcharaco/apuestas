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
    	$content=$crawler->filter(".partdesta");
    	
        $partdesta[]=array();
        $i=0;
        foreach ($content as $domElement) {
            //$html .= $domElement->ownerDocument->saveHTML($domElement);
            $obj=new Crawler($domElement);
            $divs=$obj->children()->filter('div');
            //primer divs jornadas
            $jornadas=$divs->eq(0);
            $jornada=$jornadas->children()->filter('a');
            $num_jor=$jornada->eq(0)->text();
            $division=$jornada->eq(1)->text();
            //dd($as);
            $partdesta[$i]['num_jor']=$num_jor;
            $partdesta[$i]['division']=$division;
            // segundo divs
            $equi1=$divs->eq(1)->text();
            $partdesta[$i]['equi1']=$equi1;
            //tercer divs
            $equi2=$divs->eq(2)->text();
            $partdesta[$i]['equi2']=$equi2;
            //cuarto divs
            $scdo1=$divs->eq(3)->filterXPath('//a/img')->attr('src');
            $partdesta[$i]['scdo1']=$scdo1;
            $scdo2=$divs->eq(4)->filterXPath('//a/img')->attr('src');
            $partdesta[$i]['scdo2']=$scdo2;
            //quinto divs
            $cuando=$divs->eq(5)->text();
            $partdesta[$i]['cuando']=$cuando;
            //sexto divs
            $mcdor=$divs->eq(6)->text();
            $partdesta[$i]['mcdor']=$mcdor;
            //septimo divs
            $tele=$divs->eq(7)->filter('a');
            $tele_a=$tele->eq(0)->text();
            $partdesta[$i]['tele']=$tele_a;
            //octavo divs
            $coments=$divs->eq(8)->filter('a');
            $coments_a1=$coments->eq(0)->text();
            $coments_a2=$coments->eq(1)->text();
            $coments_a3=$coments->eq(2)->text();
            /*$coments_a4=$coments->eq(3)->text(); esta etiqueta aparece en el codigo fuente pero no en la vista*/
            $partdesta[$i]['coments_a1']=$coments_a1;
            $partdesta[$i]['coments_a2']=$coments_a2;
            $partdesta[$i]['coments_a3']=$coments_a3;
            /*$partdesta[$i]['coments_a4']=$coments_a4;*/
            //noveno divs
            $bet=$divs->eq(9)->filter('a');
            $bet_a=$bet->eq(0)->text();
            $partdesta[$i]['bet']=$bet_a;

            $i++;
        }
        //dd($partdesta);
		//dd('----------------');
    	return view('welcome',compact('partdesta'));
    }
}

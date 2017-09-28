<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApiController extends Controller {
	public function indexAction() {
		$curl = curl_init ( 'http://mb.tourisport.fr/api/liste_package.php?prod=4&key=a053b5ea27edcddb81ab7a26b503a7d5' );
		curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ( $curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
		curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
		$json = curl_exec ( $curl );
		// decodage du résultat json
		$obj = json_decode ( $json, true );
		curl_close ( $curl );
		
		$curl = curl_init ( 'http://mb.tourisport.fr/api/detail_package.php?prod=4&key=a053b5ea27edcddb81ab7a26b503a7d5&id=990' );
		curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ( $curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
		curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
		$json = curl_exec ( $curl );
		// decodage du résultat json
		$obj1 = json_decode ( $json, true );
		curl_close ( $curl );
		
		$curl = curl_init ( 'http://mb.tourisport.fr/api/prix_package.php?prod=4&key=a053b5ea27edcddb81ab7a26b503a7d5&id=1896' );
		curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ( $curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
		curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
		$json = curl_exec ( $curl );
		// decodage du résultat json
		$obj2 = json_decode ( $json, true );
		curl_close ( $curl );
		
		$curl = curl_init ( 'http://mb.tourisport.fr/api/prestations.php?prod=4&key=a053b5ea27edcddb81ab7a26b503a7d5&id=16933' );
		curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ( $curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
		curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
		$json = curl_exec ( $curl );
		// decodage du résultat json
		$obj3 = json_decode ( $json, true );
		curl_close ( $curl );
		
		return $this->render ( 'BackOfficeBundle::index.html.twig', array (
				'api1' => $obj1, 'api2' => $obj2, 'api3' => $obj3, 'api' => $obj    
		) );
	}
}

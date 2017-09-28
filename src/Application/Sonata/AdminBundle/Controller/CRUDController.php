<?php
namespace Application\Sonata\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sonata\AdminBundle\Controller\CRUDController as SonataCrudController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CRUDController extends SonataCrudController {
	public function batchActionCreateTravel($query) {
		
		$objects = $query->execute();
		$nbPackage = count($objects);
	    $packagesIds ='';
		$packages ='';
		for ($i=0; $i<=$nbPackage-1; $i++)
		{
			$packagesIds = $packagesIds.$objects[$i]->getId().';';
		}

		$url = '/app_dev.php/admin/backoffice/product/create?packages_ids='.$packagesIds.'&type=travel';

		return new RedirectResponse($url);

	}

	public function batchActionCreateCruise($query) {
	
		$objects = $query->execute();
		$nbPackage = count($objects);
		$packagesIds ='';
		$packages ='';
		for ($i=0; $i<=$nbPackage-1; $i++)
		{
			$packagesIds = $packagesIds.$objects[$i]->getId().';';
		}
	
		$url = '/app_dev.php/admin/backoffice/product/create?packages_ids='.$packagesIds.'&type=cruise';
	
		return new RedirectResponse($url);
	
	}
	
	public function batchActionCreateSafari($query) {
	
		$objects = $query->execute();
		$nbPackage = count($objects);
		$packagesIds ='';
		$packages ='';
		for ($i=0; $i<=$nbPackage-1; $i++)
		{
			$packagesIds = $packagesIds.$objects[$i]->getId().';';
		}
	
		$url = '/app_dev.php/admin/backoffice/product/create?packages_ids='.$packagesIds.'&type=safari';
	
		return new RedirectResponse($url);
	
	}
	
	public function batchActionMapCreate($query) {
	
		$objects = $query->execute();
		$nbMarker = count($objects);
		$marmersIds ='';
		$markers ='';
		for ($i=0; $i<=$nbMarker-1; $i++)
		{
			$marmersIds = $marmersIds.$objects[$i]->getId().';';
		}
	
		$url = '/app_dev.php/admin/backoffice/map/create?markers_ids='.$marmersIds;
	
		return new RedirectResponse($url);
	
	}
}

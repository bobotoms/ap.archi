<?php
namespace BackOfficeBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SliderAdmin extends AbstractAdmin
{
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('name', 'text', array(
				'label' => 'Nom'
		))
		->add('slides', 'sonata_type_model', array(	
				'property' => 'name',
				'label' => 'Slide(s)',
				'multiple' => true
		));
	}
	
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper->add('name', null, array(
				'label' => 'Nom'))
			->add('slides', null, array(
				'label' => 'Slide(s)'));
	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper->addIdentifier('name', null, array(
				'label' => 'Nom'))
			->add('slides', null, array(
				'label' => 'Slide(s)'));
	}
	
}
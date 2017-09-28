<?php
namespace BackOfficeBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SlideAdmin extends AbstractAdmin
{
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
		->add('name', 'text', array(
				'label' => 'Nom'
		))
		->add('textOne', 'textarea', array(
				'label' => 'Titre',
				'required' => false
		))
		->add('textTwo', 'textarea', array(
				'label' => 'Texte 2',
				'required' => false
		))
		->add('type', 'choice',
				array(
		//				'placeholder' => '',
						'required' => true,
						'label' => 'Type',
						'attr'  => array('class' => 'typeslide', ),
						'choices' => array(
								'null' => null,
								'image' => 'Image',
								'video' => 'Vidéos',
						)))
		->add('picture', 'sonata_type_model_list', array(	
				'attr'  => array('class' => 'pictureSlide'),
		//		'property' => 'name',
				'label' => 'Photo',
				'required' => true
		))
		->add('movieWebm', 'sonata_type_model_list', array(	
				'attr'  => array('class' => 'webmSlide'),
		//		'property' => 'name',
				'label' => 'Vidéo WEBM',
				'required' => true
		))
		->add('movieMpfour', 'sonata_type_model_list', array(	
				'attr'  => array('class' => 'mpfourSlide'),
		//		'property' => 'name',
				'label' => 'Vidéo MP4',
			    'required' => true
		))
		->add('caption', 'text', array(
				'label' => 'Légende',
			    'required' => false
		))
		->add('credit', 'text', array(
				'label' => 'Crédits',
			    'required' => false
		));
	}
	
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper->add('name', null, array(
				'label' => 'Nom'))
			->add('sliders', null, array(
				'label' => 'Slider(s)'));
	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper->addIdentifier('name', null, array(
				'label' => 'Nom'))
				->add('sliders', 'doctrine_orm_choice', array(
						'class' => 'BackOfficeBundle\Entity\Slider',
						'label' => 'Slider(s)',
						'editable' => true));
	}
	
}
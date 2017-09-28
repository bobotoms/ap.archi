<?php
namespace BackOfficeBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Doctrine\Entity;
use BackOfficeBundle\Entity\Fee;
use BackOfficeBundle\Entity\IncludedOption;
use BackOfficeBundle\Entity\IncludedRate;
use BackOfficeBundle\Entity\Package;
use BackOfficeBundle\Entity\Expert;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use BackOfficeBundle;

class ThirdAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text', array(
                'label' => 'Titre'
            ))
            ->add('intro', 'sonata_simple_formatter_type', array(
                'label' => 'Intro',
                'format' => 'richhtml',
                'ckeditor_toolbar_icons' => array(
                    1 => array('Bold', 'Italic', 'Underline',
                        '-', 'Cut', 'Copy', 'Paste', 'PasteText',/* 'PasteFromWord',*/
                        '-', 'Undo', 'Redo',
                        '-', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent',
                        '-', 'Blockquote',
                        '-', /*'Image',*/ 'Link', 'Unlink', /*'Table'*/),
                    2 => array('Maximize', 'Source')
                )
            ))
            ->add('firstText', 'sonata_simple_formatter_type', array(
                'label' => 'Text 1',
                'format' => 'richhtml',
                'ckeditor_toolbar_icons' => array(
                    1 => array('Bold', 'Italic', 'Underline',
                        '-', 'Cut', 'Copy', 'Paste', 'PasteText',/* 'PasteFromWord',*/
                        '-', 'Undo', 'Redo',
                        '-', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent',
                        '-', 'Blockquote',
                        '-', /*'Image',*/ 'Link', 'Unlink', /*'Table'*/),
                    2 => array('Maximize', 'Source')
                )
            ))
            ->add('secondText', 'sonata_simple_formatter_type', array(
                'label' => 'Text 2',
                'format' => 'richhtml',
                'ckeditor_toolbar_icons' => array(
                    1 => array('Bold', 'Italic', 'Underline',
                        '-', 'Cut', 'Copy', 'Paste', 'PasteText',/* 'PasteFromWord',*/
                        '-', 'Undo', 'Redo',
                        '-', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent',
                        '-', 'Blockquote',
                        '-', /*'Image',*/ 'Link', 'Unlink', /*'Table'*/),
                    2 => array('Maximize', 'Source')
                )
            ))
            ->add('thirdText', 'sonata_simple_formatter_type', array(
                'label' => 'Text 3',
                'format' => 'richhtml',
                'ckeditor_toolbar_icons' => array(
                    1 => array('Bold', 'Italic', 'Underline',
                        '-', 'Cut', 'Copy', 'Paste', 'PasteText',/* 'PasteFromWord',*/
                        '-', 'Undo', 'Redo',
                        '-', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent',
                        '-', 'Blockquote',
                        '-', /*'Image',*/ 'Link', 'Unlink', /*'Table'*/),
                    2 => array('Maximize', 'Source')
                )
            ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title', null, array(
            'label' => 'Titre'));
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title', null, array(
            'label' => 'Titre'))
            ->add('firstText', null, array(
                'label' => 'Text 1'))
            ->add('secondText', null, array(
                'label' => 'Text 2'))
            ->add('thirdText', null, array(
                'label' => 'Text 3'));
    }
}
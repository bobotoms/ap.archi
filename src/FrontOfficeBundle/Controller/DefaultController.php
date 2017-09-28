<?php

namespace FrontOfficeBundle\Controller;

use FrontOfficeBundle\Entity\Mail;
use FrontOfficeBundle\Services\MailerContact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $first = $em->getRepository('BackOfficeBundle:First')->findOneBy(array('id' => 1));
        $second = $em->getRepository('BackOfficeBundle:Second')->findOneBy(array('id' => 1));
        $third = $em->getRepository('BackOfficeBundle:Third')->findOneBy(array('id' => 1));
        $fourth = $em->getRepository('BackOfficeBundle:Fourth')->findOneBy(array('id' => 1));
        $slider = $em->getRepository('BackOfficeBundle:Slider')->findOneBy(array('id' => $fourth->getSlider()));
        $slides = $this->slider($slider);

        $mail = new Mail();

        $form = $this->createFormBuilder($mail)
            ->add('name', TextType::class)
            ->add('email', TextType::class)
            ->add('message', TextareaType::class)
            ->add('save', SubmitType::class, array('label' => 'J\'envoi, maintenant!'))
            ->getForm();

        if(isset($request))
        {
            if($form->handleRequest($request))
            {

                if ($form->isSubmitted() && $form->isValid()) {
                    $response = new Response();
                    $task = $form->getData();

                    $name = $form->get('name')->getData();
                    $email = $form->get('email')->getData();
                    $message = $form->get('message')->getData();

                    $message = \Swift_Message::newInstance()
                        ->setSubject('Contact Ap Architecture')
                        ->setFrom($email)
                        ->setTo('rougeulgregory@gmail.com')
                        ->setReplyTo($email)
                        ->setBody($this->renderView('FrontOfficeBundle::mail.html.twig', ['message' => $message]))
                        ->setContentType('text/html');
                    $this->get('mailer')->send($message);
       //             $this->get('frontoffice.mailer')->sendContactFormEmail($name, $email, $message);
                    $response->setStatusCode(200);
                }
            }
        }
        return $this->render('FrontOfficeBundle::index.html.twig',
            array(
                'slides' => $slides,
                'first' => $first,
                'second' => $second,
                'third' => $third,
                'fourth' => $fourth,
                'form' => $form->createView(),
            ));
    }

    public function slider($slider)
    {
        $em = $this->getDoctrine()->getManager();
        $slides = [];

        if($slider) {
            $sliderId = $slider->getId();
            $areaSlides = $em->getRepository('BackOfficeBundle:Slide')->findBySlider($sliderId);

            foreach ($areaSlides as $key => $slide) {

                $slideSlide = $em->getRepository('BackOfficeBundle:Slide')->findOneBy(array('id' => intval($slide['slide_id'])));

                array_push($slides, $slideSlide);
            }
        }

        return $slides;
    }
}

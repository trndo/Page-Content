<?php

namespace App\Controller;

use App\Entity\PageContent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PageContentController extends Controller
{

    public function index()
    {
        $data = $this->getDoctrine()->getRepository(PageContent::class);
        $pages = $data->findAll();

        return $this->render('page_content/index.html.twig',compact('pages'));
    }
    public function content($id)
    {
        $data = $this->getDoctrine()->getRepository(PageContent::class);
        $page = $data->find($id);

        return $this->render('page_content/content.html.twig', compact('page'));
    }


    public function query()
    {
        $entityManager=$this->getDoctrine()->getManager();

        $pageContent=new PageContent();
        $pageContent->setPageName('Мадагаскар');
        $pageContent->setTitle('Мадагаскар  2');
        $pageContent->setAboutContent('
        Полная опасностей жизнь на Мадагаскаре не оправдала ожиданий привыкших к комфорту Нью-Йоркского зоопарка животных — льва Алекса, зебры Марти, 
        жирафа Мелмана и бегемотихи Глории — и друзья решают сбежать с острова. . ');
        $pageContent->setAdditionalInfo('
        Неожиданно для себя Алекс понимает, что после жизни в зоопарке у него гораздо меньше общего с 
        родственниками, чем ему хотелось бы…');
        $pageContent->getShowAdditionalInfo(false);
        $pageContent->setUpdatedAt(new \DateTime());

        $entityManager->persist($pageContent);
        $entityManager->flush();

        return new Response('Saved new product with id '.$pageContent->getId());
    }
}

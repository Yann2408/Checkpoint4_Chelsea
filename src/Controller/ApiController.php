<?php

namespace App\Controller;

use DateTime;
use App\Entity\Calendar;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ApiController extends AbstractController
{
    #[Route('admin/api', name: 'api')]
    public function index(): Response
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }

    #[Route('/api/{id}/edit', name: 'api_event_edit', methods: ['PUT'])]
    public function majEvents(?Calendar $calendar, Request $request): Response
    {

        //on récupère les données
        $donnees = json_decode($request->getContent());

        if(
            isset($donnees->title) && !empty($donnees->title) &&
            isset($donnees->description) && !empty($donnees->description) &&
            isset($donnees->backgroundColor) && !empty($donnees->backgroundColor) &&
            isset($donnees->textColor) && !empty($donnees->textColor) &&
            isset($donnees->start) && !empty($donnees->start) &&
            isset($donnees->end) && !empty($donnees->end)
        ){
            //si données complètes on initialise un code: code 200 = données mises à jour
            $code = 200;

            //on vérifie si l'id existe
            if(!$calendar){
                //on instancie un meet
                $calendar = new Calendar;
                //on change le code: 201 = données crées
                $code = 201;
            }

            $calendar->setTitle($donnees->title);
            $calendar->setDescription($donnees->description);
            $calendar->setBackgroundColor($donnees->backgroundColor);
            $calendar->setTextColor($donnees->textColor);
            $calendar->setStart(new DateTime($donnees->start));
            $calendar->setEnd(new DateTime($donnees->end));

            $em = $this->getDoctrine()->getManager();
            $em->persist($calendar);
            $em->flush();

            return new Response('ok', $code);

        }else{
            //données incomplètes
            return new Response('Incomplete data', 404);

        }

        // return $this->render('api/index.html.twig', [
        //     'controller_name' => 'ApiController',
        // ]);
    }
}

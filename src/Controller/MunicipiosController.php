<?php
/**
 * Created by PhpStorm.
 * User: Javi
 * Date: 10/03/2019
 * Time: 23:23
 */

namespace App\Controller;


use App\Service\MunicipioServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MunicipiosController extends AbstractController
{
    /**
     * @Route("/api/municipios/{nombreDeProvincia}", name = "api_municipios")
     * @param string $nombreDeProvincia
     * @param MunicipioServices $municipioServices
     * @return JsonResponse
     */
    public function getByNombreDeProvinciaAction(string $nombreDeProvincia, MunicipioServices $municipioServices): Response
    {
       return new JsonResponse($municipioServices->getAllByNombreDeProvincia($nombreDeProvincia));
    }

    /**
     * @Route("/show/municipios/{nombreDeProvincia}", name = "show_municipios")
     * @param string $nombreDeProvincia
     * @return string
     */
    public function showByNombreDeProvinciaAction(string $nombreDeProvincia)
    {
        return $this->render('show_municipios.html.twig', ['provincia' => $nombreDeProvincia]);
    }
}
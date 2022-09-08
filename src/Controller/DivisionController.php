<?php

namespace App\Controller;

use App\Repository\CompanyRepository;
use App\Repository\DivisionRepository;
use App\Response\CustomResponse;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DivisionController extends AbstractController
{
    protected $divisionRepository;
    protected $response;

    public function __construct(
        DivisionRepository $divisionRepository,
        CustomResponse $response
    )
    {
        $this->divisionRepository = $divisionRepository;
        $this->response = $response;
    }
    /**
     * @Route("/divisions", name="app_division")
     */
    public function index(): Response
    {
        try {
            $companies = $this->divisionRepository->all();
            return $this->json($companies);
        }catch (Exception $exception){
            return $this->response->errorResource($exception->getMessage());
        }
    }
}

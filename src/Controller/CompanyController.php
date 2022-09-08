<?php

namespace App\Controller;

use App\Repository\CompanyRepository;
use App\Response\CustomResponse;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompanyController extends AbstractController
{
    protected  $companyRepository;
    protected $response;

    public function __construct(
        CompanyRepository $companyRepository,
        CustomResponse $response
    )
    {
        $this->companyRepository = $companyRepository;
        $this->response = $response;
    }

    /**
     * @Route("/companies", name="app_company")
     */
    public function index(): Response
    {
        try {
            $companies = $this->companyRepository->all();
            return $this->json($companies);
        }catch (Exception $exception){
            return $this->response->errorResource($exception->getMessage());
        }
    }

    public function filter()
    {
    }
}

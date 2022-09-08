<?php

namespace App\Controller;

use App\Repository\JobRepository;
use App\Response\CustomResponse;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    protected  $jobRepository;
    protected $response;

    public function __construct(
        JobRepository $jobRepository,
        CustomResponse $response
    )
    {
        $this->jobRepository = $jobRepository;
        $this->response = $response;
    }

    /**
     * @Route("/jobs", name="app_job")
     */
    public function index(): Response
    {
        try {
            $companies = $this->jobRepository->all();
            return $this->json($companies);
        }catch (Exception $exception){
            return $this->response->errorResource($exception->getMessage());
        }

    }
}

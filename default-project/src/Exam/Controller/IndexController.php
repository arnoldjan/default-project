<?php

namespace Ja\DefaultProject\Bundle\Exam\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\TwigBundle\TwigEngine;

class IndexController extends Controller
{
    private $templating;

    public function __construct(TwigEngine $templating)
    {
        $this->templating = $templating;
    }

    public function __invoke()
    {
        $data = [
            'name' => 'exam',
        ];

        return $this->templating->renderResponse('/ja/default-project/exam/views/start.html.twig', $data);
    }
}

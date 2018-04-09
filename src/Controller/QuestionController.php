<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\Question;
use App\Form\QuestionType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
    /**
     * @Route("/admin/question", name="question")
     */
    public function index()
    {
        return $this->render('question/index.html.twig', [
            'controller_name' => 'QuestionController',
        ]);
    }

    /**
     * @Route("/admin/question/new", name="new_question")
     */
    public function new(Request $request)
    {
        $question = new Question();
        $question->setAnswers(new Answer());
        $question->setAnswers(new Answer());
        $question->setAnswers(new Answer());
        $question->setAnswers(new Answer());

        $form = $this->createForm(QuestionType::class, $question);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $question = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($question);
            $entityManager->flush();

            foreach ($question->getAnswers() as $_answer) {
                $entityManager->persist($_answer->setQuestionId($question->getId()));
            }

            $entityManager->flush();

            return $this->redirectToRoute('question');
        }

        return $this->render('question/new.html.twig', [
            'our_form' => $form->createView()
        ]);
    }
}

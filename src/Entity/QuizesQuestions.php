<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuizesQuestionsRepository")
 */
class QuizesQuestions
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quiz_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $question_id;

    public function getId()
    {
        return $this->id;
    }

    public function getQuizId(): ?int
    {
        return $this->quiz_id;
    }

    public function setQuizId(int $quiz_id): self
    {
        $this->quiz_id = $quiz_id;

        return $this;
    }

    public function getQuestionId(): ?int
    {
        return $this->question_id;
    }

    public function setQuestionId(int $question_id): self
    {
        $this->question_id = $question_id;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $question;

    public $answers;

    public function __construct()
    {
        $this->answers = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswers() // return array of answers (Google for association)
    {
        return $this->answers;
    }

    public function setAnswers($answer)
    {
        $this->answers->add($answer);

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserAnswersRepository")
 */
class UserAnswers
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
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $answer_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quiz_id;

    public function getId()
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getAnswerId(): ?int
    {
        return $this->answer_id;
    }

    public function setAnswerId(int $answer_id): self
    {
        $this->answer_id = $answer_id;

        return $this;
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
}

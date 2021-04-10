<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Data submitted by the contact form and used to send the contact email.
 */
class Contact
{
    /**
     * @Assert\NotBlank(message="Veuillez saisir votre prénom.")
     */
    protected $firstName;

    /**
     * @Assert\NotBlank(message="Veuillez saisir votre nom.")
     */
    protected $lastName;

    /**
     * @Assert\NotBlank(message="Veuillez saisir votre adresse e-mail.")
     * @Assert\Email(message="Veuillez saisir une adresse e-mail valide.")
     */
    protected $email;

    protected $phone;

    /**
     * @Assert\NotBlank(message="Vous n'avez pas écrit de message.")
     */
    protected $message;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}

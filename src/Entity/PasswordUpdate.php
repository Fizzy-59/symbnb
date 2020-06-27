<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;


class PasswordUpdate
{

    /**
     * @SecurityAssert\UserPassword(
     *     message="Votre ancien mot de passe n'est pas correct"
     * )
     */
    private $oldPassword;


    /**
     * @Assert\Length(min="8", minMessage="Le mot de passe doit faire au moins 8 caractères")
     */
    private $newPassword;


    /**
     * @Assert\EqualTo(propertyPath="newPassword", message="Le mot de passe ne correspond pas")
     */
    private $confirmPassword;


    public function getOldPassword(): ?string
    {
        return $this->oldPassword;
    }

    public function setOldPassword(string $oldPassword): self
    {
        $this->oldPassword = $oldPassword;

        return $this;
    }

    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }

    public function setNewPassword(string $newPassword): self
    {
        $this->newPassword = $newPassword;

        return $this;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->confirmPassword;
    }

    public function setConfirmPassword(string $confirmPassword): self
    {
        $this->confirmPassword = $confirmPassword;

        return $this;
    }
}
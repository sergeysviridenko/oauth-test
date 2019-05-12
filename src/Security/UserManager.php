<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class UserManager
{
    /**
     * @var SessionInterface
     */
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @param array $data
     */
    public function setUserByData(array $data): void
    {
        $user = (new User())
            ->setUsername($data['name'])
            ->setId($data['_id'])
            ->setLogoLink($data['logo'] ?? null)
            ->setEmail($data['email'] ?? null)
            ->setProfileLink($data['_links']['self'] ?? null);

        $this->session->set($user->getUsername(), $user);
    }

    /**
     * @param string $userName
     *
     * @return User
     */
    public function getUserByUserName(string $userName): User
    {
        return $this->session->get($userName);
    }
}

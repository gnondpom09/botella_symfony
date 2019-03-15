<?php

namespace BotellaBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 *
 */
class AntifloodValidator extends ConstraintValidator
{
    // Attributs
    private $requestStack;
    private $em;

    // Constructor
    public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
    {
        $this->requestStack = $requestStack;
        $this->em           = $em;
    }

    // methodes
    public function validate($value, Constraint $contraint)
    {
        $request = $this->requestStack->getCurrentRequest();
        // Recuperation de l'adress IP de l'expéditeur
        $ip = $request->getClientIp();

        // Verification du delai du post
        $isFlood = $this->em->getRepository('BotellaBundle:Comment')
        ->isFlood($ip, 5);

        if ($isFlood) {
            $this->context->addViolation($constraint->message);
        }
    }
}

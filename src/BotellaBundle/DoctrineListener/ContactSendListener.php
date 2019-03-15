<?php

namespace BotellaBundle\DoctrineListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use BotellaBundle\Email\ContactMailer;
Use BotellaBundle\Entity\Contact;

/**
 *
 */
class ContactSendListener
{
    /**
     * @var ContactMailer
     */
    private $contactMailer;

    function __construct(ContactMailer $contactMailer)
    {
        $this->contactMailer = $contactMailer;
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if (!$entity instanceof Contact) {
            return;
        }
        // Envoie de mail
        $this->contactMailer->sendNewMessage($entity);
    }
}

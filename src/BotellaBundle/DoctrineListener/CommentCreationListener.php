<?php

namespace BotellaBundle\DoctrineListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use BotellaBundle\Email\CommentMailer;
use BotellaBundle\Entity\Comment;

class CommentCreationListener
{
    /**
    * @var CommentMailer
    */
    private $commentMailer;

    /*********************************/
    /*********** CONSTRUCT ***********/
    /*********************************/

    public function __construct(CommentMailer $commentMailer)
    {
        $this->commentMailer = $commentMailer;
    }
    /*********************************/
    /************ Methodes ***********/
    /*********************************/

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        // On ne veut envoyer un email que pour les entités Comment
        if (!$entity instanceof Comment) {
            return;
        }

        $this->commentMailer->sendNewNotification($entity);
    }
}

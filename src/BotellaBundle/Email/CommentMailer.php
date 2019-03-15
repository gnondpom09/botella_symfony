<?php

namespace BotellaBundle\Email;

use BotellaBundle\Entity\Comment;

class CommentMailer
{
  /**
   * @var \Swift_Mailer
   */
  private $mailer;

  public function __construct(\Swift_Mailer $mailer)
  {
    $this->mailer = $mailer;
  }

  public function sendNewNotification(Comment $comment)
  {
    $message = new \Swift_Message(
      'Nouveau commentaire',
      'Vous avez reçu un nouveau commentaire sur un article.'
    );

    $message
      ->addTo($comment->getArticle()->getAuthor()) // Ici bien sûr il faudrait un attribut "email", j'utilise "author" à la place
      ->addFrom('admin@laurentbotella-artist.com')
    ;

    $this->mailer->send($message);
  }
}

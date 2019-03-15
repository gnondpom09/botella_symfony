<?php

namespace CRC\PlatformBundle\Email;

use BotellaBundle\Entity\Contact;


class ContactMailer
{

	/**
	 * @var \_Swift_Mailer
	 */
	private $mailer;

	function __construct(\Swift_mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	public function sendNewMessage(Contact $contact)
	{
		$from    = $contact->getEmail();
		$to      = "laurent.botella@vivaldi.net";
		$subject = $contact->getSubject();
		$body    = $contact->getBody();

		$this->sendMessage($from, $to, $subject, $body);
	}

	protected sendMessage()
	{
		$mail = new \Swift_Message;
		$mail->setFrom($from)
			 setTo($to)
			 ->setSubject($subject)
			 ->setBody($body);

		$this->mailer->send($mail);
	}
}

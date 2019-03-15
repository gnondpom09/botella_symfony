<?php

namespace BotellaBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Antiflood extends Constraint
{
    public $message = "vous avez posté un message il y a moins de 10 secondes, veuillez attendre un peu."

    public function validateBy()
    {
        // return service alias
        return 'botella_antiflood';
    }
}

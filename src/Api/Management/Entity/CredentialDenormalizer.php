<?php

namespace Apigee\Edge\Api\Management\Entity;

use Apigee\Edge\Entity\EntityDenormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

/**
 * Class CredentialDenormalizer.
 *
 * @package Apigee\Edge\Api\Management\Entity
 * @author Dezső Biczó <mxr576@gmail.com>
 */
class CredentialDenormalizer extends EntityDenormalizer implements DenormalizerInterface
{
    /**
     * @inheritdoc
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type instanceof AppCredentialInterface;
    }
}

<?php
declare(strict_types=1);

namespace App\Helper;

use Symfony\Component\Validator\ConstraintViolationInterface;

class ViolationsMapper
{
    public function __invoke(\Symfony\Component\Validator\ConstraintViolationListInterface $violationList): array
    {
        return array_map([$this, 'mapper'], iterator_to_array($violationList));
    }

    protected function mapper(ConstraintViolationInterface $violation): array
    {
        return [
            'property' => $violation->getPropertyPath(),
            'message' => $violation->getMessage()
        ];
    }
}

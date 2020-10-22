<?php


namespace App\Helper;


use Symfony\Component\Validator\ConstraintViolationInterface;

class ViolationsMapper
{
    public function __invoke(\Symfony\Component\Validator\ConstraintViolationListInterface $violationList)
    {
        return array_map([$this, 'mapper'], iterator_to_array($violationList));
    }

    protected function mapper(ConstraintViolationInterface $violation)
    {
        return [
            'property' => $violation->getPropertyPath(),
            'message' => $violation->getMessage()
        ];
    }
}

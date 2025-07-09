<?php

namespace Laragato\RequestObject\Traits;

use Laragato\RequestObject\Attributes\FormObject;
use ReflectionClass;

trait useObjectRequest
{
    public function toObject()
    {
        $reflection = new ReflectionClass($this);

        $attributes = $reflection->getAttributes(FormObject::class);
        if (empty($attributes)) {
            return $this->validated();
        }

        $dto = $attributes[0]->newInstance();

        return new ($dto->class)(...$this->validated());
    }
}
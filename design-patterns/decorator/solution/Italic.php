<?php


class Italic implements StringDecoratorInterface
{
    private $stringDecorator;

    public function __construct(StringDecoratorInterface $stringDecorator)
    {
        $this->stringDecorator = $stringDecorator;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return sprintf('<em> %s </em>',
            $this->stringDecorator->__toString()
            );
    }
}
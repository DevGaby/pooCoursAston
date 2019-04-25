<?php


class Strong implements StringDecoratorInterface
{
    /**
     * @var StringDecoratorInterface
     */
    private $stringDecorator;

    public function __construct(StringDecoratorInterface $stringDecorator)
    {
        $this->stringDecorator = $stringDecorator;
    }

    public function __toString()
    {
        return sprintf('<strong> %s </strong>',
            $this->stringDecorator->__toString()
        );
    }
}
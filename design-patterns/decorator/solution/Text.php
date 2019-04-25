<?php


class Text implements StringDecoratorInterface
{
    /**
     * @var string
     */
    private  $value;
    public function __construct(string $value)
    {
        $this->setValue($value);
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Text
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getValue();
    }

}
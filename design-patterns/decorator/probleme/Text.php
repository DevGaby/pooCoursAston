<?php


class Text
{
    /**
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Text
     */
    public function setValue($value): string
    {
        $this->value = $value;
        return $this;
    }
}
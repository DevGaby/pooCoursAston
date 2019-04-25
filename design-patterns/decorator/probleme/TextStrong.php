<?php


class TextStrong extends  Text
{
    public function getValue(): string
    {
        return printf('<strong>%s</strong>strong>',
        parent::getValue()
        );
    }
}
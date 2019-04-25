<?php


class TextItalic extends  Text
{
    public function getValue(): string
    {
        return printf('<em>%s</em>',
            parent::getValue()
        );
    }

}
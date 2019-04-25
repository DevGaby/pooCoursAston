<?php


class MessageManager
{
    private $writers = [];
    public function addWriter(WriterInterface $writer): void
    {
        $this->writers[] = $writer;
    }

    public function send(string $message): void
    {
        foreach ($this->writers as $writer)
        {
            echo get_class($writer) . '<br>';
            $writer->write($message);
            echo '<br>';
        }
    }
}
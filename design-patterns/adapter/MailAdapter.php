<?php


class MailAdapter implements WriterInterface
{
    /**
     * @var Mail
     */
    private $mail;

    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    public function write(string $message): void
    {
        // TODO: Implement write() method.
        $this->mail->sendMessage($message);
    }

}
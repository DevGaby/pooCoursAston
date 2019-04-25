<?php


class TwitteAdapter implements WriterInterface
{
    /**
     * @var Tweet
     */
    private $tweet;

    public function __construct(Twitter $tweet)
    {
        $this->tweet = $tweet;
    }

    public function write(string $message): void
    {
        // TODO: Implement write() method.
        $this->tweet->twitte($message);
    }
}
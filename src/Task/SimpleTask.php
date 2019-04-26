<?php


namespace Saiks24\Task;


class SimpleTask implements TaskInterface
{
    /**
     * @inheritDoc
     */
    public function execute()
    {
        echo 'Hello from: ' . getmypid(). PHP_EOL;
    }
}
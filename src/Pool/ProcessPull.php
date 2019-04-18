<?php

/**
 * Class ProcessPull
 */
class ProcessPull
{
    /** @var SplObjectStorage */
    private $threadStorage;

    public function add(ThreadInterface $thread)
    {

    }

    public function start()
    {
        /** @var ThreadInterface $thread */
        foreach ($this->threadStorage as $thread)
        {
            $thread->run();
        }
    }
}
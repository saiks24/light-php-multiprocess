<?php

/**
 * Class ProcessPull
 */
class ProcessPull
{
    /** @var SplObjectStorage */
    private $threadStorage;

    /** Attach new process to pull
     * @param ThreadInterface $thread
     */
    public function add(ThreadInterface $thread)
    {
        $this->threadStorage->attach($thread);
    }

    /**
     * Start pull process execute
     */
    public function start()
    {
        /** @var ThreadInterface $thread */
        foreach ($this->threadStorage as $thread)
        {
            $thread->run();
        }
    }
}
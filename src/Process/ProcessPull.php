<?php

namespace Saiks24\Process;

use Saiks24\Task\TaskInterface;

class ProcessPull
{
    /** @var array Process ['pid'] */
    private $processStorage;

    /** @var int count of active process */
    private $countOfProcess;

    public function run(TaskInterface $task)
    {
        $pid = pcntl_fork();
        // If wee in parent process
        if($pid) {
            $this->processStorage[$pid] = true;
            $this->countOfProcess++;
        } else {
            // If in child process
            $task->execute();
            shell_exec('kill -9 ' . getmypid());
        }
    }
}
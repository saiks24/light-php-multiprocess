<?php


namespace Saiks24\Core;


class SysCalls implements SystemCallsInterface
{
    public function forkProcess(): int
    {
        return pcntl_fork();
    }

    public function waitChildDiedProcess()
    {

    }

    public function interruptProcess(int $pid)
    {
        pcntl_exec('kill -15 '.$pid);
    }

}
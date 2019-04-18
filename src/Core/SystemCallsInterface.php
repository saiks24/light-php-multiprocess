<?php

namespace Saiks24\Core;


interface SystemCallsInterface
{
    /** Process fork syscall
     * @return int
     */
    public function forkProcess() : int;

    /** SIGCHLD signal
     * @return mixed
     */
    public function waitChildDiedProcess();

    /** SIGTERM,SIGKILL signal
     * @param int $pid
     * @return mixed
     */
    public function interruptProcess(int $pid);

}
<?php
namespace Saiks24\Tasks;

/**
 * Interface ExecuteInterface
 */
interface ExecuteInterface
{

    /** Task init method
     * @return bool
     */
    public function init() : bool;

    /** Start task execute
     * @return mixed
     */
    public function execute();

    /** On success end of execute
     * @return mixed
     */
    public function onSuccess();

    /** On fail end of execute
     * @return mixed
     */
    public function onFailure();

}

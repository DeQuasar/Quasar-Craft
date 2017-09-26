<?php

namespace Api\Exceptions;

/**
 * Class Handler
 * @package Api\Handlers\Exceptions
 */
class Handler implements \Illuminate\Contracts\Debug\ExceptionHandler
{
    /**
     * @param \Exception $e
     *
     * @throws \Exception
     */

    public function report(\Exception $e)
    {
        throw $e;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \Exception               $e
     *
     * @throws \Exception
     */

    public function render($request, \Exception $e)
    {
        throw $e;
    }

    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @param \Exception                                        $e
     *
     * @throws \Exception
     */

    public function renderForConsole($output, \Exception $e)
    {
        throw $e;
    }
}

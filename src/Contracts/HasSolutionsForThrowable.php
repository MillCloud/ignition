<?php

namespace MillCloud\Ignition\Contracts;

use Throwable;

/**
 * Interface used for SolutionProviders.
 */
interface HasSolutionsForThrowable
{
    public function canSolve(Throwable $throwable): bool;

    /** @return array<int, \MillCloud\Ignition\Contracts\Solution> */
    public function getSolutions(Throwable $throwable): array;
}

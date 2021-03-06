<?php

/*
 * This file is part of the doyo/code-coverage project.
 *
 * (c) Anthonius Munthi <https://itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Doyo\Bridge\CodeCoverage\Session;

use Doyo\Bridge\CodeCoverage\ProcessorInterface;
use Doyo\Bridge\CodeCoverage\TestCase;

/**
 * Code coverage session.
 */
interface SessionInterface
{
    /**
     * Returns current session name.
     *
     * @return string
     */
    public function getName();

    /**
     * Get processor for this session.
     *
     * @return ProcessorInterface|null
     */
    public function getProcessor();

    /**
     * Refresh current state from cache.
     */
    public function refresh();

    /**
     * Reset this session.
     */
    public function reset();

    /**
     * Save current state into cache.
     */
    public function save();

    /**
     * Returns true if have error.
     *
     * @return bool
     */
    public function hasExceptions();

    /**
     * Returns an array of exceptions.
     *
     * @return \Exception[]
     */
    public function getExceptions();

    /**
     * Set current TestCase to be used in code coverage.
     *
     * @param TestCase $testCase
     */
    public function setTestCase(TestCase $testCase);

    /**
     * Start code coverage.
     */
    public function start();

    /**
     * @return array
     */
    public function stop();
}

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

namespace Doyo\Bridge\CodeCoverage;

use SebastianBergmann\CodeCoverage\CodeCoverage;

interface ProcessorInterface
{
    /**
     * Set current test case for code coverage.
     *
     * @param TestCase $testCase
     */
    public function setCurrentTestCase(TestCase $testCase);

    /**
     * Get current test case for code coverage.
     *
     * @return TestCase:null
     */
    public function getCurrentTestCase();

    /**
     * @return CodeCoverage
     */
    public function getCodeCoverage();

    /**
     * Add test case.
     *
     * @param TestCase $testCase
     */
    public function addTestCase(TestCase $testCase);

    /**
     * Merge code coverage from another processor.
     *
     * @param ProcessorInterface|CodeCoverage $processor
     */
    public function merge($processor);

    /**
     * @param TestCase $testCase
     */
    public function start(TestCase $testCase);

    /**
     * @param bool  $append
     * @param array $linesToBeCovered
     * @param array $linesToBeUsed
     * @param bool  $ignoreForceCoversAnnotation
     *
     * @return array
     */
    public function stop(bool $append = true, $linesToBeCovered = [], array $linesToBeUsed = [], bool $ignoreForceCoversAnnotation = false): array;

    /**
     * Complete code coverage collecting process.
     */
    public function complete();

    /**
     * Clear code coverage.
     */
    public function clear();
}

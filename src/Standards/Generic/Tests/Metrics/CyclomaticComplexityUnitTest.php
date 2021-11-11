<?php
/**
 * Unit test class for the CyclomaticComplexity sniff.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */

namespace PHP_CodeSniffer\Standards\Generic\Tests\Metrics;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

class CyclomaticComplexityUnitTest extends AbstractSniffUnitTest
{


    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @param string $testFile The name of the file being tested.
     *
     * @return array<int, int>
     */
    public function getErrorList($testFile='')
    {
        switch ($testFile) {
            default:
                return [];
                break;
        }//end switch

    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @param string $testFile The name of the file being tested.
     *
     * @return array<int, int>
     */
    public function getWarningList($testFile='')
    {
        switch ($testFile) {
        case 'CyclomaticComplexityUnitTest.2.inc':
            return [
                26 => 1,
                72 => 1,
                118 => 1,
                164 => 1,
                210 => 1,
            ];
            break;
        default:
            return [];
            break;
        }//end switch

    }//end getWarningList()


}//end class

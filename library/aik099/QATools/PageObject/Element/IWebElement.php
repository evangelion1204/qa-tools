<?php
/**
 * This file is part of the QA-Tools library.
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @copyright Alexander Obuhovich <aik.bold@gmail.com>
 * @link      https://github.com/qa-tools/qa-tools
 */

namespace aik099\QATools\PageObject\Element;


/**
 * Classes, that represent elements on a page must implement this interface.
 *
 * @method \Mockery\Expectation shouldReceive(string $name)
 */
interface IWebElement extends IContainerAware
{


}

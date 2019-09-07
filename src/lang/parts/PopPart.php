<?php declare(strict_types=1);
/**
 * This file is part of the Phootwork package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license MIT License
 * @copyright Thomas Gossmann
 */
namespace phootwork\lang\parts;

trait PopPart {
	/**
	 * Pop the element off the end of array
	 *
	 * @return mixed the popped element
	 */
	public function pop() {
		return array_pop($this->array);
	}
}

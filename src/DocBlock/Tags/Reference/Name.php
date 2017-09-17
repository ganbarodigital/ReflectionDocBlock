<?php
/**
 * This file is part of phpDocumentor.
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @copyright 2010-2017 Mike van Riel<mike@phpdoc.org>
 *  @license   http://www.opensource.org/licenses/mit-license.php MIT
 *  @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock\Tags\Reference;

use phpDocumentor\Reflection\ClassLikeName;

/**
 * ClassLikeName reference used by {@see phpDocumentor\Reflection\DocBlock\Tags\See}
 */
final class Name implements Reference
{
    /**
     * @var ClassLikeName
     */
    private $ref;

    /**
     * Fqsen constructor.
     */
    public function __construct(ClassLikeName $ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return string string representation of the referenced name
     */
    public function __toString()
    {
        return (string)$this->ref;
    }
}

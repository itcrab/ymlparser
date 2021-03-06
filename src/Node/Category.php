<?php

/**
 * @author Serkin Alexander <serkin.alexander@gmail.com>
 * @license https://github.com/serkin/ymlparser/LICENSE MIT
 */

namespace YMLParser\Node;

class Category extends \ArrayObject
{
    /**
     * Gets all category's children categories.
     *
     * @return array Array of YMLParser\Node\Category or empty array
     */
    public function getChildren()
    {
        return [];
    }

    /**
     * Gets category's parent category.
     *
     * @return Category|null
     */
    public function getParentCategory()
    {
        return new self([]);
    }

    /**
     * Checks wether category has parent category or not.
     *
     * @return bool
     */
    public function hasParentCategory()
    {
        return true;
    }
}

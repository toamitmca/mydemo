<?php
/**
 * EntityConstructTrait
 *
 * @filesource
 */
namespace TandF\India\Entity;

/**
 * Constructor method to be used across Entities.
 *
 * @package    TandF\India\Entity\Product
 * @version    1.0.1
 * @copyright  2016 Amity
 * @author     Amit Kumar <toamitmca@gmail.com>
 */

trait EntityConstructTrait
{

    /**
     * Constructor
     *
     * @param array $property Property keys and values
     */
    public function __construct(array $property = array())
    {
        foreach ($property as $key => $val) {
            if (is_string($key) and ! empty($key)) {
                $setter = 'set' . ucfirst($key);
                if (method_exists($this, '__set')) {
                    $this->__set($key, $val);
                } elseif (method_exists($this, $setter)) {
                    $this->$setter($val);
                } elseif (property_exists($this, $key)) {
                    $this->$key = $val;
                }
            }
        }
    }

}
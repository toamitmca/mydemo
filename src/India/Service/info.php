<?php
/**
 * Contact
 *
 * @filesource
 */
namespace TandF\India\Service;

/**
 * Service for providing Contact information.
 *
 * @package    TandF\India\Entity\Product
 * @version    1.0.1
 * @copyright  2016 Amity
 * @author     Amit Kumar <toamitmca@gmail.com>
 */

class Info extends Service
{

    /**
     * Load methods used across Services.
     */
    use ServiceTrait;

    /**
     * Get Office Address
     *
     * @return string HTML
     */
    public function getOfficeAddress()
    {
        $ret = '';
		$ret .= '<address class="vcard"><p><strong class="fn org">Taylor &amp; Francis India</strong>';
		$ret .= '<br><span class="adr"><span class="street-address">2nd &amp; 3rd floor, The National Council of YMCAs of India, <br>1, Jai Singh Road</span>';
		$ret .= '<br><span class="locality">New Delhi</span>, <span class="postal-code">110 001</span>, <span class="country-name">IN</span></span>';
		$ret .= '<br>Telephone: <a href="tel:+91(11)43155100" class="tel">+91 (11) 4315 5100</a>';
		$ret .= '</p></address>';
        return $ret;
    }

}
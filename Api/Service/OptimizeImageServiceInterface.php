<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Magenerds
 * @package    Magenerds_OptimizeMedia
 * @author     Mahmood Dhia <m.dhia@techdivision.com>
 * @copyright  Copyright (c) 2018 TechDivision GmbH (http://www.techdivision.com)
 * @link       http://www.techdivision.com/
 */

namespace Magenerds\OptimizeImage\Api\Service;

/**
 * @copyright  Copyright (c) 2018 Magenerds and TechDivision GmbH (http://www.magenerds.com)
 * @link       http://www.magenerds.com/
 * @author     Mahmood Dhia <m.dhia@techdivision.com>
 */
interface OptimizeImageServiceInterface
{
    /**
     * Optimize Image
     *
     * @param string $absolutePath Absolute file path to image
     * @return bool
     */
    public function optimize($absolutePath);
}
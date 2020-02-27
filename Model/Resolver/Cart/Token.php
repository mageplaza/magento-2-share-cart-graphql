<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_ShareCartGraphQl
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

declare(strict_types=1);

namespace Mageplaza\ShareCartGraphQl\Model\Resolver\Cart;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Quote\Model\Quote;
use Mageplaza\ShareCart\Helper\Data;
use Mageplaza\ShareCartGraphQl\Model\Resolver\AbstractShareCart;

/**
 * Class Token
 * @package Mageplaza\ShareCartGraphQl\Model\Resolver\StoreCreditCustomer
 */
class Token extends AbstractShareCart
{
    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        parent::resolve($field, $context, $info, $value, $args);

        if (!isset($value['model'])) {
            throw new LocalizedException(__('"model" value should be specified'));
        }

        /** @var Quote $cart */
        $cart = $value['model'];

        return $cart->getMpShareCartToken();
    }
}

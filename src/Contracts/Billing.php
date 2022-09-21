<?php

namespace BNMetrics\Shopify\Contracts;

interface Billing
{
    /**
     * Create a Charge
     *
     * @param  object  $authorized instanceof Shopify || User
     * @param  array  $options
     * @return $this
     *
     * @throws Exception
     */
    public function create($authorized, array $options);

    /**
     * Asking the user to confirm the charge
     * redirect the user to the confirmation URL on "myshopify.com" domain
     */
    public function redirect();
}

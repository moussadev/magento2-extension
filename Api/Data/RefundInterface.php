<?php

namespace Emartech\Emarsys\Api\Data;

use Magento\Sales\Api\Data\CreditmemoInterface as OriginalRefundInterface;

interface RefundInterface extends OriginalRefundInterface
{
    const ID_KEY = 'id';

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id);
}

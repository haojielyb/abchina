<?php
/**
 * Created by PhpStorm.
 * User: marui
 * Date: 2020/11/9
 * Time: 13:49
 * @title 账单详情
 */

namespace haojielyb\abchina\QueryBillResponseInfo;


class SplitSubMerInfo
{
    /**二级子商户号*/
    var $splitMerchantId;
    
    /**二级子商户分账金额*/
    var $splitAmount;

    /**
     * DescDetail constructor.
     * @param $splitMerchantId
     * @param $splitAmount
     */
    public function __construct($splitMerchantId, $splitAmount)
    {
        $this->splitMerchantId = $splitMerchantId;
        $this->splitAmount = $splitAmount;
    }

    /**
     * @return mixed
     */
    public function getSplitMerchantId()
    {
        return $this->splitMerchantId;
    }

    /**
     * @param mixed $splitMerchantId
     */
    public function setSplitMerchantId($splitMerchantId)
    {
        $this->splitMerchantId = $splitMerchantId;
    }

    /**
     * @return mixed
     */
    public function getSplitAmount()
    {
        return $this->splitAmount;
    }

    /**
     * @param mixed $splitAmount
     */
    public function setSplitAmount($splitAmount)
    {
        $this->splitAmount = $splitAmount;
    }
}
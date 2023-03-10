<?php
/**
 * Created by PhpStorm.
 * User: marui
 * Date: 2019/4/2
 * Time: 10:08
 */

namespace haojielyb\abchina;


class ConfirmTraceRequestInfo
{
    /** 商户编号*/
    var $merchantId;
    /** 缴费中心流水号*/
    var $traceNo;

    /**
     * @return mixed
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param mixed $merchantId
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
     * @return mixed
     */
    public function getTraceNo()
    {
        return $this->traceNo;
    }

    /**
     * @param mixed $traceNo
     */
    public function setTraceNo($traceNo)
    {
        $this->traceNo = $traceNo;
    }


}
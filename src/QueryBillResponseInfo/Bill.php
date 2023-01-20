<?php
/**
 * Created by PhpStorm.
 * User: marui
 * Date: 2019/4/9
 * Time: 13:42
 */

namespace haojielyb\abchina\QueryBillResponseInfo;


class Bill
{
        /** 账单编号*/
    var $billNo;
    
        /** 账单名称*/
    var $billName;
    
        /** 欠费金额*/
    var $oweAmt;
    
        /** 手续费*/
    var $feeAmt;
    
        /** 最小金额*/
    var $minAmt;
    
        /** 最大金额*/
    var $maxAmt;
    
        /** 余额*/
    var $balance;
    
        /** 缴费账单到期日*/
    var $expireDate;
    
        /** 收款商户号*/
    var $rcvMerchantId;
    
        /** 收款账号*/
    var $rcvAcc;
    
        /** 分账模板号*/
    var $tempSplitAcc;
    
        /** 均匀时段缴费 */
    var $unitDetail;
    
        /** 选择套餐*/
    var $optionDetails;
    
        /** 账单详情描述*/
    var $descDetails;

        /** 账单详情描述*/
    var $splitSubMerInfos;

        /** 子账单必缴标志，多账单合并支付时默认选中不可不选  true：必选    false：非必选 */
    var $mustPayFlag;

    /**
     * @return mixed
     */
     public function getMustPayFlag()
    {
        return $this->mustPayFlag;
    }

    /**
     * @param mixed $mustPayFlag
     */
    public function setMustPayFlag($mustPayFlag)
    {
        $this->mustPayFlag = $mustPayFlag;
    }

    /**
     * @return mixed
     */
     public function getSplitSubMerInfos()
    {
        return $this->splitSubMerInfos;
    }

    /**
     * @param mixed $splitSubMerInfos
     */
    public function setSplitSubMerInfos($splitSubMerInfos)
    {
        $this->splitSubMerInfos = $splitSubMerInfos;
    }

    /**
     * @return mixed
     */
    public function getBillNo()
    {
        return $this->billNo;
    }

    /**
     * @param mixed $billNo
     */
    public function setBillNo($billNo)
    {
        $this->billNo = $billNo;
    }

    /**
     * @return mixed
     */
    public function getBillName()
    {
        return $this->billName;
    }

    /**
     * @param mixed $billName
     */
    public function setBillName($billName)
    {
        $this->billName = $billName;
    }

    /**
     * @return mixed
     */
    public function getOweAmt()
    {
        return $this->oweAmt;
    }

    /**
     * @param mixed $oweAmt
     */
    public function setOweAmt($oweAmt)
    {
        $this->oweAmt = $oweAmt;
    }

    /**
     * @return mixed
     */
    public function getFeeAmt()
    {
        return $this->feeAmt;
    }

    /**
     * @param mixed $feeAmt
     */
    public function setFeeAmt($feeAmt)
    {
        $this->feeAmt = $feeAmt;
    }

    /**
     * @return mixed
     */
    public function getMinAmt()
    {
        return $this->minAmt;
    }

    /**
     * @param mixed $minAmt
     */
    public function setMinAmt($minAmt)
    {
        $this->minAmt = $minAmt;
    }

    /**
     * @return mixed
     */
    public function getMaxAmt()
    {
        return $this->maxAmt;
    }

    /**
     * @param mixed $maxAmt
     */
    public function setMaxAmt($maxAmt)
    {
        $this->maxAmt = $maxAmt;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return mixed
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * @param mixed $expireDate
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
    }

    /**
     * @return mixed
     */
    public function getRcvMerchantId()
    {
        return $this->rcvMerchantId;
    }

    /**
     * @param mixed $rcvMerchantId
     */
    public function setRcvMerchantId($rcvMerchantId)
    {
        $this->rcvMerchantId = $rcvMerchantId;
    }

    /**
     * @return mixed
     */
    public function getRcvAcc()
    {
        return $this->rcvAcc;
    }

    /**
     * @param mixed $rcvAcc
     */
    public function setRcvAcc($rcvAcc)
    {
        $this->rcvAcc = $rcvAcc;
    }

    /**
     * @return mixed
     */
    public function getTempSplitAcc()
    {
        return $this->tempSplitAcc;
    }

    /**
     * @param mixed $tempSplitAcc
     */
    public function setTempSplitAcc($tempSplitAcc)
    {
        $this->tempSplitAcc = $tempSplitAcc;
    }

    /**
     * @return mixed
     */
    public function getUnitDetail()
    {
        return $this->unitDetail;
    }

    /**
     * @param mixed $unitDetail
     */
    public function setUnitDetail($unitDetail)
    {
        $this->unitDetail = $unitDetail;
    }

    /**
     * @return mixed
     */
    public function getOptionDetails()
    {
        return $this->optionDetails;
    }

    /**
     * @param mixed $optionDetails
     */
    public function setOptionDetails($optionDetails)
    {
        $this->optionDetails = $optionDetails;
    }

    /**
     * @return mixed
     */
    public function getDescDetails()
    {
        return $this->descDetails;
    }

    /**
     * @param mixed $descDetails
     */
    public function setDescDetails($descDetails)
    {
        $this->descDetails = $descDetails;
    }


}
<?php
/**
 * Created by PhpStorm.
 * User: marui
 * Date: 2019/4/9
 * Time: 13:47
 */

namespace haojielyb\abchina\QueryBillResponseInfo;


class UnitDetail
{
    /** 单位名称 */
    var $unitName;
    
        /** 单位金额 */
    var $unitAmount;
    
        /** 最小单位数量 */
    var $minUnitNum;

    /**
     * UnitDetail constructor.
     * @param $unitName
     * @param $unitAmount
     * @param $minUnitNum
     */
    public function __construct($unitName, $unitAmount, $minUnitNum)
    {
        $this->unitName = $unitName;
        $this->unitAmount = $unitAmount;
        $this->minUnitNum = $minUnitNum;
    }


}
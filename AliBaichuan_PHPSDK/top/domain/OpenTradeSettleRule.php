<?php

/**
 * 百川交易分账规则对象
 * @author auto create
 */
class OpenTradeSettleRule
{
	
	/** 
	 * 分账扩展属性，json格式，其中rateType表示是按比例分账（rate）还是固定金额分账（fixedAmount），scType表示分账日结（daily），月结（monthly），实时（realTime），如果是月结，还有参数scDay，值必须在1-28之间
	 **/
	public $extendAttributes;
	
	/** 
	 * 分账规则，定义分账方的名称和分账比例，JSON数据格式，如果是按比例分账则是小数，如果是固定金额分账，则用整数表示
	 **/
	public $rule;
	
	/** 
	 * 分账规则id
	 **/
	public $ruleId;	
}
?>
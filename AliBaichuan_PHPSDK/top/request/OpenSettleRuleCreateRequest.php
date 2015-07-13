<?php
/**
 * TOP API: taobao.open.settle.rule.create request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenSettleRuleCreateRequest
{
	/** 
	 * 分账扩展属性，json格式，其中rateType表示是按比例分账（rate）还是固定金额分账（fixedAmount），scType表示分账日结（daily），月结（monthly），实时（realTime），如果是月结，还必须传参数scDay，值必须在1-28之间
	 **/
	private $extendAttributes;
	
	/** 
	 * 分账规则
	 **/
	private $rule;
	
	private $apiParas = array();
	
	public function setExtendAttributes($extendAttributes)
	{
		$this->extendAttributes = $extendAttributes;
		$this->apiParas["extend_attributes"] = $extendAttributes;
	}

	public function getExtendAttributes()
	{
		return $this->extendAttributes;
	}

	public function setRule($rule)
	{
		$this->rule = $rule;
		$this->apiParas["rule"] = $rule;
	}

	public function getRule()
	{
		return $this->rule;
	}

	public function getApiMethodName()
	{
		return "taobao.open.settle.rule.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->extendAttributes,"extendAttributes");
		RequestCheckUtil::checkNotNull($this->rule,"rule");
		RequestCheckUtil::checkMaxLength($this->rule,512,"rule");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

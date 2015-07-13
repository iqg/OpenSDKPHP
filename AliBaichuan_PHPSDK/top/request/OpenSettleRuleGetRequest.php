<?php
/**
 * TOP API: taobao.open.settle.rule.get request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenSettleRuleGetRequest
{
	/** 
	 * 分账模板id
	 **/
	private $ruleId;
	
	private $apiParas = array();
	
	public function setRuleId($ruleId)
	{
		$this->ruleId = $ruleId;
		$this->apiParas["rule_id"] = $ruleId;
	}

	public function getRuleId()
	{
		return $this->ruleId;
	}

	public function getApiMethodName()
	{
		return "taobao.open.settle.rule.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ruleId,"ruleId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

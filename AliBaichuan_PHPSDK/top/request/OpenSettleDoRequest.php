<?php
/**
 * TOP API: taobao.open.settle.do request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenSettleDoRequest
{
	/** 
	 * 订单分账金额，如果是通过主/子订单分账，则不用传
	 **/
	private $amount;
	
	/** 
	 * 主订单分账时传入主订单号，子订单分账时传入子订单号，不依赖订单分账时需要传入通过我们提供的接口获得的唯一序列
	 **/
	private $orderId;
	
	/** 
	 * 分账规则id
	 **/
	private $ruleId;
	
	/** 
	 * 分账目标，必须与分账模板中设置的分账角色一致，value值角色对应的openid
	 **/
	private $targets;
	
	/** 
	 * M表示分账类型主订单，D表示分账类型为子订单
	 **/
	private $type;
	
	private $apiParas = array();
	
	public function setAmount($amount)
	{
		$this->amount = $amount;
		$this->apiParas["amount"] = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setRuleId($ruleId)
	{
		$this->ruleId = $ruleId;
		$this->apiParas["rule_id"] = $ruleId;
	}

	public function getRuleId()
	{
		return $this->ruleId;
	}

	public function setTargets($targets)
	{
		$this->targets = $targets;
		$this->apiParas["targets"] = $targets;
	}

	public function getTargets()
	{
		return $this->targets;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "taobao.open.settle.do";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ruleId,"ruleId");
		RequestCheckUtil::checkNotNull($this->targets,"targets");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

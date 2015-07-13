<?php
/**
 * TOP API: taobao.open.order.payment.refund request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenOrderPaymentRefundRequest
{
	/** 
	 * 退款金额，人民币，单位为分
	 **/
	private $amount;
	
	/** 
	 * 待退款的外部订单号
	 **/
	private $isvOrderId;
	
	/** 
	 * 待退款的外部资金流水号
	 **/
	private $isvPayId;
	
	/** 
	 * 本次退款操作的外部流水号
	 **/
	private $isvRefundId;
	
	/** 
	 * 待退款的订单号
	 **/
	private $orderId;
	
	/** 
	 * 待退款的资金流水单号
	 **/
	private $payOrderId;
	
	/** 
	 * 退款原因
	 **/
	private $reason;
	
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

	public function setIsvOrderId($isvOrderId)
	{
		$this->isvOrderId = $isvOrderId;
		$this->apiParas["isv_order_id"] = $isvOrderId;
	}

	public function getIsvOrderId()
	{
		return $this->isvOrderId;
	}

	public function setIsvPayId($isvPayId)
	{
		$this->isvPayId = $isvPayId;
		$this->apiParas["isv_pay_id"] = $isvPayId;
	}

	public function getIsvPayId()
	{
		return $this->isvPayId;
	}

	public function setIsvRefundId($isvRefundId)
	{
		$this->isvRefundId = $isvRefundId;
		$this->apiParas["isv_refund_id"] = $isvRefundId;
	}

	public function getIsvRefundId()
	{
		return $this->isvRefundId;
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

	public function setPayOrderId($payOrderId)
	{
		$this->payOrderId = $payOrderId;
		$this->apiParas["pay_order_id"] = $payOrderId;
	}

	public function getPayOrderId()
	{
		return $this->payOrderId;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function getApiMethodName()
	{
		return "taobao.open.order.payment.refund";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->amount,"amount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

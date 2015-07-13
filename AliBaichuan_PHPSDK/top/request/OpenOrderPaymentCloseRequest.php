<?php
/**
 * TOP API: taobao.open.order.payment.close request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenOrderPaymentCloseRequest
{
	/** 
	 * 要关闭的外部订单号，如果订单下只有一笔未完结的待付款资金单时可以直接使用这个
	 **/
	private $isvOrderId;
	
	/** 
	 * 要关闭的外部资金流水单号
	 **/
	private $isvPayId;
	
	/** 
	 * 要关闭的订单号，如果订单下只有一笔未完结的待付款资金单时可以直接使用这个
	 **/
	private $orderId;
	
	/** 
	 * 要关闭的资金流水单号
	 **/
	private $payOrderId;
	
	private $apiParas = array();
	
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

	public function getApiMethodName()
	{
		return "taobao.open.order.payment.close";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

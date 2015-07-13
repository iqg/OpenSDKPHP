<?php
/**
 * TOP API: taobao.open.order.update request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenOrderUpdateRequest
{
	/** 
	 * isv端的订单流水号
	 **/
	private $isvOrderId;
	
	/** 
	 * 新的订单价格，人民币，单位为分
	 **/
	private $newAmount;
	
	/** 
	 * 新的订单数据
	 **/
	private $newData;
	
	/** 
	 * 新的订单状态
	 **/
	private $newStatus;
	
	/** 
	 * 订单号
	 **/
	private $orderId;
	
	/** 
	 * 订单版本号
	 **/
	private $version;
	
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

	public function setNewAmount($newAmount)
	{
		$this->newAmount = $newAmount;
		$this->apiParas["new_amount"] = $newAmount;
	}

	public function getNewAmount()
	{
		return $this->newAmount;
	}

	public function setNewData($newData)
	{
		$this->newData = $newData;
		$this->apiParas["new_data"] = $newData;
	}

	public function getNewData()
	{
		return $this->newData;
	}

	public function setNewStatus($newStatus)
	{
		$this->newStatus = $newStatus;
		$this->apiParas["new_status"] = $newStatus;
	}

	public function getNewStatus()
	{
		return $this->newStatus;
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

	public function setVersion($version)
	{
		$this->version = $version;
		$this->apiParas["version"] = $version;
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function getApiMethodName()
	{
		return "taobao.open.order.update";
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

<?php
/**
 * TOP API: taobao.open.order.create request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenOrderCreateRequest
{
	/** 
	 * 订单金额
	 **/
	private $amount;
	
	/** 
	 * 买家id
	 **/
	private $buyerId;
	
	/** 
	 * 订单其他属性和备注
	 **/
	private $data;
	
	/** 
	 * isv端订单流水号
	 **/
	private $isvOrderId;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 商品标题
	 **/
	private $itemTitle;
	
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

	public function setBuyerId($buyerId)
	{
		$this->buyerId = $buyerId;
		$this->apiParas["buyer_id"] = $buyerId;
	}

	public function getBuyerId()
	{
		return $this->buyerId;
	}

	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
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

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setItemTitle($itemTitle)
	{
		$this->itemTitle = $itemTitle;
		$this->apiParas["item_title"] = $itemTitle;
	}

	public function getItemTitle()
	{
		return $this->itemTitle;
	}

	public function getApiMethodName()
	{
		return "taobao.open.order.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerId,"buyerId");
		RequestCheckUtil::checkMaxLength($this->data,4096,"data");
		RequestCheckUtil::checkMaxLength($this->isvOrderId,64,"isvOrderId");
		RequestCheckUtil::checkMaxLength($this->itemTitle,128,"itemTitle");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

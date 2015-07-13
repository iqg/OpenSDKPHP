<?php
/**
 * TOP API: taobao.open.order.mul.create request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenOrderMulCreateRequest
{
	/** 
	 * 订单总金额，单位分
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
	 * 优惠金额，单位分
	 **/
	private $discountFee;
	
	/** 
	 * 外部订单号
	 **/
	private $isvOrderId;
	
	/** 
	 * 百川交易商品
	 **/
	private $items;
	
	/** 
	 * 选择的店铺优惠，从优惠系统获取，没有优惠可以不用填
	 **/
	private $selectedPromotionId;
	
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

	public function setDiscountFee($discountFee)
	{
		$this->discountFee = $discountFee;
		$this->apiParas["discount_fee"] = $discountFee;
	}

	public function getDiscountFee()
	{
		return $this->discountFee;
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

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function setSelectedPromotionId($selectedPromotionId)
	{
		$this->selectedPromotionId = $selectedPromotionId;
		$this->apiParas["selected_promotion_id"] = $selectedPromotionId;
	}

	public function getSelectedPromotionId()
	{
		return $this->selectedPromotionId;
	}

	public function getApiMethodName()
	{
		return "taobao.open.order.mul.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerId,"buyerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

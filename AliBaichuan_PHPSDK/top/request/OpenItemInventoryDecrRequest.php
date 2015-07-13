<?php
/**
 * TOP API: taobao.open.item.inventory.decr request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenItemInventoryDecrRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 减库存的数量
	 **/
	private $num;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setNum($num)
	{
		$this->num = $num;
		$this->apiParas["num"] = $num;
	}

	public function getNum()
	{
		return $this->num;
	}

	public function getApiMethodName()
	{
		return "taobao.open.item.inventory.decr";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->num,"num");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

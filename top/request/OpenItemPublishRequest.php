<?php
/**
 * TOP API: taobao.open.item.publish request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenItemPublishRequest
{
	/** 
	 * 商品内容json串，具体见http://http://baichuan.taobao.com/portal/doc?articleId=342
	 **/
	private $itemJson;
	
	private $apiParas = array();
	
	public function setItemJson($itemJson)
	{
		$this->itemJson = $itemJson;
		$this->apiParas["item_json"] = $itemJson;
	}

	public function getItemJson()
	{
		return $this->itemJson;
	}

	public function getApiMethodName()
	{
		return "taobao.open.item.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemJson,"itemJson");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

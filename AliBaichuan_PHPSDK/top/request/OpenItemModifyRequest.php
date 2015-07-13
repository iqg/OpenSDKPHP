<?php
/**
 * TOP API: taobao.open.item.modify request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenItemModifyRequest
{
	/** 
	 * 要删除的信息，是json中key的路径。父子之间可用@连接，多个路径之间用逗号(,)分隔
	 **/
	private $deletePaths;
	
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 要更新的信息，具体见文档http://http://baichuan.taobao.com/portal/doc?articleId=342
	 **/
	private $json;
	
	private $apiParas = array();
	
	public function setDeletePaths($deletePaths)
	{
		$this->deletePaths = $deletePaths;
		$this->apiParas["delete_paths"] = $deletePaths;
	}

	public function getDeletePaths()
	{
		return $this->deletePaths;
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

	public function setJson($json)
	{
		$this->json = $json;
		$this->apiParas["json"] = $json;
	}

	public function getJson()
	{
		return $this->json;
	}

	public function getApiMethodName()
	{
		return "taobao.open.item.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

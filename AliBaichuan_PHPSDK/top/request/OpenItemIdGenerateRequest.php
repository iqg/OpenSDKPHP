<?php
/**
 * TOP API: taobao.open.item.id.generate request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenItemIdGenerateRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.open.item.id.generate";
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

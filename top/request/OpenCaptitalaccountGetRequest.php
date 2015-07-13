<?php
/**
 * TOP API: taobao.open.captitalaccount.get request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenCaptitalaccountGetRequest
{
	/** 
	 * 资金账户id
	 **/
	private $captitaAccountId;
	
	private $apiParas = array();
	
	public function setCaptitaAccountId($captitaAccountId)
	{
		$this->captitaAccountId = $captitaAccountId;
		$this->apiParas["captita_account_id"] = $captitaAccountId;
	}

	public function getCaptitaAccountId()
	{
		return $this->captitaAccountId;
	}

	public function getApiMethodName()
	{
		return "taobao.open.captitalaccount.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->captitaAccountId,"captitaAccountId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

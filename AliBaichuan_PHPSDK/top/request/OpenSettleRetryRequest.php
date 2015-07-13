<?php
/**
 * TOP API: taobao.open.settle.retry request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenSettleRetryRequest
{
	/** 
	 * 分成方用户ID
	 **/
	private $openId;
	
	/** 
	 * 分账外部唯一号列表
	 **/
	private $outBizIds;
	
	private $apiParas = array();
	
	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["open_id"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function setOutBizIds($outBizIds)
	{
		$this->outBizIds = $outBizIds;
		$this->apiParas["out_biz_ids"] = $outBizIds;
	}

	public function getOutBizIds()
	{
		return $this->outBizIds;
	}

	public function getApiMethodName()
	{
		return "taobao.open.settle.retry";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->openId,"openId");
		RequestCheckUtil::checkNotNull($this->outBizIds,"outBizIds");
		RequestCheckUtil::checkMaxListSize($this->outBizIds,20,"outBizIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

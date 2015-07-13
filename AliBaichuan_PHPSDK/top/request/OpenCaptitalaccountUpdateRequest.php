<?php
/**
 * TOP API: taobao.open.captitalaccount.update request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenCaptitalaccountUpdateRequest
{
	/** 
	 * 开户人
	 **/
	private $accountHolder;
	
	/** 
	 * 银行卡账户类型
	 **/
	private $accountType;
	
	/** 
	 * 支付宝账号
	 **/
	private $alipayAccount;
	
	/** 
	 * 开户行
	 **/
	private $bankBranch;
	
	/** 
	 * 银行卡号
	 **/
	private $bankCardNum;
	
	/** 
	 * 资金账户id
	 **/
	private $id;
	
	/** 
	 * 外部系统id
	 **/
	private $outerId;
	
	/** 
	 * 服务者身份证号
	 **/
	private $serverIdentityNo;
	
	/** 
	 * 服务者手机号
	 **/
	private $serverMobile;
	
	/** 
	 * 服务者姓名
	 **/
	private $serverName;
	
	/** 
	 * 门店地址
	 **/
	private $storeAddress;
	
	/** 
	 * 市
	 **/
	private $storeCityName;
	
	/** 
	 * 联系方式
	 **/
	private $storeContact;
	
	/** 
	 * 区
	 **/
	private $storeDistrictName;
	
	/** 
	 * 服务者姓名
	 **/
	private $storeName;
	
	/** 
	 * 省
	 **/
	private $storeProvName;
	
	/** 
	 * 分店名
	 **/
	private $storeSubname;
	
	/** 
	 * 收款账号类型
	 **/
	private $useType;
	
	private $apiParas = array();
	
	public function setAccountHolder($accountHolder)
	{
		$this->accountHolder = $accountHolder;
		$this->apiParas["account_holder"] = $accountHolder;
	}

	public function getAccountHolder()
	{
		return $this->accountHolder;
	}

	public function setAccountType($accountType)
	{
		$this->accountType = $accountType;
		$this->apiParas["account_type"] = $accountType;
	}

	public function getAccountType()
	{
		return $this->accountType;
	}

	public function setAlipayAccount($alipayAccount)
	{
		$this->alipayAccount = $alipayAccount;
		$this->apiParas["alipay_account"] = $alipayAccount;
	}

	public function getAlipayAccount()
	{
		return $this->alipayAccount;
	}

	public function setBankBranch($bankBranch)
	{
		$this->bankBranch = $bankBranch;
		$this->apiParas["bank_branch"] = $bankBranch;
	}

	public function getBankBranch()
	{
		return $this->bankBranch;
	}

	public function setBankCardNum($bankCardNum)
	{
		$this->bankCardNum = $bankCardNum;
		$this->apiParas["bank_card_num"] = $bankCardNum;
	}

	public function getBankCardNum()
	{
		return $this->bankCardNum;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setServerIdentityNo($serverIdentityNo)
	{
		$this->serverIdentityNo = $serverIdentityNo;
		$this->apiParas["server_identity_no"] = $serverIdentityNo;
	}

	public function getServerIdentityNo()
	{
		return $this->serverIdentityNo;
	}

	public function setServerMobile($serverMobile)
	{
		$this->serverMobile = $serverMobile;
		$this->apiParas["server_mobile"] = $serverMobile;
	}

	public function getServerMobile()
	{
		return $this->serverMobile;
	}

	public function setServerName($serverName)
	{
		$this->serverName = $serverName;
		$this->apiParas["server_name"] = $serverName;
	}

	public function getServerName()
	{
		return $this->serverName;
	}

	public function setStoreAddress($storeAddress)
	{
		$this->storeAddress = $storeAddress;
		$this->apiParas["store_address"] = $storeAddress;
	}

	public function getStoreAddress()
	{
		return $this->storeAddress;
	}

	public function setStoreCityName($storeCityName)
	{
		$this->storeCityName = $storeCityName;
		$this->apiParas["store_city_name"] = $storeCityName;
	}

	public function getStoreCityName()
	{
		return $this->storeCityName;
	}

	public function setStoreContact($storeContact)
	{
		$this->storeContact = $storeContact;
		$this->apiParas["store_contact"] = $storeContact;
	}

	public function getStoreContact()
	{
		return $this->storeContact;
	}

	public function setStoreDistrictName($storeDistrictName)
	{
		$this->storeDistrictName = $storeDistrictName;
		$this->apiParas["store_district_name"] = $storeDistrictName;
	}

	public function getStoreDistrictName()
	{
		return $this->storeDistrictName;
	}

	public function setStoreName($storeName)
	{
		$this->storeName = $storeName;
		$this->apiParas["store_name"] = $storeName;
	}

	public function getStoreName()
	{
		return $this->storeName;
	}

	public function setStoreProvName($storeProvName)
	{
		$this->storeProvName = $storeProvName;
		$this->apiParas["store_prov_name"] = $storeProvName;
	}

	public function getStoreProvName()
	{
		return $this->storeProvName;
	}

	public function setStoreSubname($storeSubname)
	{
		$this->storeSubname = $storeSubname;
		$this->apiParas["store_subname"] = $storeSubname;
	}

	public function getStoreSubname()
	{
		return $this->storeSubname;
	}

	public function setUseType($useType)
	{
		$this->useType = $useType;
		$this->apiParas["use_type"] = $useType;
	}

	public function getUseType()
	{
		return $this->useType;
	}

	public function getApiMethodName()
	{
		return "taobao.open.captitalaccount.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

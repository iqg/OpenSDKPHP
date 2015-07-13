<?php
/**
 * TOP API: taobao.open.order.list request
 * 
 * @author auto create
 * @since 1.0, 2015.07.09
 */
class OpenOrderListRequest
{
	/** 
	 * 是否需要查询购买明细和资金单
	 **/
	private $fields;
	
	/** 
	 * 分页查询的页码，从第一页开始
	 **/
	private $pageIndex;
	
	/** 
	 * 分页查询的每页查询最大数量，最大100
	 **/
	private $pageSize;
	
	/** 
	 * 为了更方便的支持开发者查询，定义自定义查询条件，查询条件即sql语句的where部分，部分语法如下（为了理解方面，这里举的例子都写成了完整的sql语句，正常开发时只需传入where之后的条件部分）：and条件：多个查询条件之间用and连接，如select * from XXX where id = 3 and status=3 and amount>=100In条件：多个值进行匹配，如select * from XXX where status in (3, 4,5)Between and：范围查询，如select * from XXX where amount between 2 and 5not条件：查询条件取反，目前支持not in，not between and，not like等，如select * from XXX where amount not between 2 and 5like条件：字符串匹配，只支持字符串类型的查询，目前仅支持商品名称(item_title)的匹配检索，如select * from XXX where item_title like "优惠商品"单个字符条件，如=,!=,<>,>,>=,<,<=等
	 **/
	private $query;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setPageIndex($pageIndex)
	{
		$this->pageIndex = $pageIndex;
		$this->apiParas["page_index"] = $pageIndex;
	}

	public function getPageIndex()
	{
		return $this->pageIndex;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setQuery($query)
	{
		$this->query = $query;
		$this->apiParas["query"] = $query;
	}

	public function getQuery()
	{
		return $this->query;
	}

	public function getApiMethodName()
	{
		return "taobao.open.order.list";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->pageIndex,"pageIndex");
		RequestCheckUtil::checkNotNull($this->pageSize,"pageSize");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
		RequestCheckUtil::checkNotNull($this->query,"query");
		RequestCheckUtil::checkMaxLength($this->query,512,"query");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}

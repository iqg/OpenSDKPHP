<?php

/**
 * 百川交易订单
 * @author auto create
 */
class OpenTradeOrder
{
	
	/** 
	 * 实付款（所有正向金额累加，不考虑退款），人民币，单位为分
	 **/
	public $actualPaid;
	
	/** 
	 * 订单退款总金额（所有逆向金额累加），人民币，单位为分
	 **/
	public $actualRefund;
	
	/** 
	 * 订单金额
	 **/
	public $amount;
	
	/** 
	 * 订单购买明细列表
	 **/
	public $buyDetails;
	
	/** 
	 * 买家id
	 **/
	public $buyerId;
	
	/** 
	 * 订单数据
	 **/
	public $data;
	
	/** 
	 * 订单创建时间
	 **/
	public $gmtCreate;
	
	/** 
	 * 订单修改时间
	 **/
	public $gmtModify;
	
	/** 
	 * 这笔订单在isv端的流水号
	 **/
	public $isvOrderId;
	
	/** 
	 * 商品id
	 **/
	public $itemId;
	
	/** 
	 * 商品标题
	 **/
	public $itemTitle;
	
	/** 
	 * 订单号
	 **/
	public $orderId;
	
	/** 
	 * 与这笔订单关联的资金流水单列表
	 **/
	public $payOrders;
	
	/** 
	 * 订单状态
	 **/
	public $status;
	
	/** 
	 * 版本号，对这笔订单发起修改操作时需要将这个版本号传递过来以避免并发问题
	 **/
	public $version;	
}
?>
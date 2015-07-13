<?php

/**
 * 百川交易资金流水单
 * @author auto create
 */
class OpenTradePayOrder
{
	
	/** 
	 * 金额，人民币，单位为分
	 **/
	public $amount;
	
	/** 
	 * 买家id
	 **/
	public $buyerId;
	
	/** 
	 * 这笔资金流水单在资金渠道方的id，当 channel_type 为 ALIPAY 时表示支付宝订单号
	 **/
	public $channelOrderId;
	
	/** 
	 * 资金渠道类型，目前只支持 ALIPAY 一项
	 **/
	public $channelType;
	
	/** 
	 * 这笔资金流水单在isv端的流水号
	 **/
	public $isvPayId;
	
	/** 
	 * 这笔资金流水单归属的订单id
	 **/
	public $orderId;
	
	/** 
	 * 资金流水单id
	 **/
	public $payOrderId;
	
	/** 
	 * 资金流水单的状态，目前支持 INIT、PAID 和 CLOSED 三项
	 **/
	public $status;
	
	/** 
	 * 如果是退款单，则此字段表示这笔退款单针对的付款单号
	 **/
	public $targetPayId;
	
	/** 
	 * 资金操作类型，目前支持两项 DIRECT_PAY 和 DIRECT_REFUND，分别表示即时到账支付和即时到账退款
	 **/
	public $type;	
}
?>
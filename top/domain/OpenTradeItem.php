<?php

/**
 * 百川交易商品
 * @author auto create
 */
class OpenTradeItem
{
	
	/** 
	 * 购买数量
	 **/
	public $buyAmount;
	
	/** 
	 * 优惠金额，首次加载不用传
	 **/
	public $discountFee;
	
	/** 
	 * 商品其他属性及备注信息等等
	 **/
	public $itemData;
	
	/** 
	 * 商品id
	 **/
	public $itemId;
	
	/** 
	 * 商品单价
	 **/
	public $itemPrice;
	
	/** 
	 * 商品标题
	 **/
	public $itemTitle;
	
	/** 
	 * 优惠id，首次加载不用传
	 **/
	public $promotionId;	
}
?>
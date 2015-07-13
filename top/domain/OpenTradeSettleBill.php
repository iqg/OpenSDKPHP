<?php

/**
 * 百川分账账单
 * @author auto create
 */
class OpenTradeSettleBill
{
	
	/** 
	 * 分成金额
	 **/
	public $amount;
	
	/** 
	 * 失败信息（仅限分成失败时有效）
	 **/
	public $errorMsg;
	
	/** 
	 * 分成状态（未分成0，分成成功1，分成失败2，打款处理中3）
	 **/
	public $fcStatus;
	
	/** 
	 * 分成类型（实时:1、日结:2、月结:3）
	 **/
	public $fcType;
	
	/** 
	 * 分成方用户ID（服务方）
	 **/
	public $otherUserId;
	
	/** 
	 * 外部唯一号
	 **/
	public $outBizId;	
}
?>
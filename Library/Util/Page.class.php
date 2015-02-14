<?php
namespace Library\Util;
/**
 * 分页类
 * @author hongker
 * @package Library\Util
 * @version 1.0
 */
class Page {

	public $totalCount; //总记录数
	public $totalPage; //总页数
	public $first = 1;
	public $last; //最后一页
	public $prev; //上一页
	public $next; //下一页
	public $currentPage; //当前页数
	public $rows; //每页显示行数
	public $items; //数据项
	
	/**
	 * 构造函数
	 * @param Array $config 配置项
	 * @property $config['data'] 要分页的数据项(数组)
	 * @property $config['row'] 每页显示行数
	 * @property $config['currentPage'] 当前页数
	 */
	
	public function __construct(Array $config) {
		$this->totalCount = count($config['data']);
		$this->rows = $config['row'];
		$this->currentPage = $config['currentPage'];
		$this->items = $config['data'];
		
		$this->totalPage = ceil($this->totalCount/$this->rows);
		$this->last = $this->totalPage;
		$this->prev = ($this->currentPage>1)?($this->currentPage-1):1;
		$this->next = ($this->currentPage==$this->totalPage)?$this->totalPage:$this->currentPage+1;
		
	}
	
}
<?php
namespace Library\Database;
/**
 * 数据库类
 * 
 * @author hongker
 * @package Library\Database
 * @version 1.0
 */
class DB {
	
	/**
	 * 数据库主机名
	 * @var string
	 * @access protected
	 */
	protected $host;
	
	/**
	 * 用户名
	 * @var string
	 * @access protected
	 */
	protected $user;
	
	/**
	 * 密码
	 * @var string
	 * @access protected
	 */
	protected $password;
	
	/**
	 * 数据库名称
	 * @var string
	 * @access protected
	 */
	protected $dbname;
	
	/**
	 * 字符集
	 * @var string
	 * @access protected
	 */
	protected $charset;
	
	/**
	 * 数据库连接
	 * @var mixed
	 * @access protected
	 */
	protected $connection;
	
	/**
	 * 构造函数
	 */
	public function __construct($host,$user,$password,$dbname,$charset) {
		$this->host = $host;
		$this->user = $user;
		$this->dbname = $dbname;
		$this->password = $password;
		$this->charset = $charset;
	}
	
	/**
	 * 初始化
	 */
	public function initalize() {
		$dsn = "mysql:host={$this->host};dbname={$this->dbname}";
		
		$this->connection = new \PDO($dsn, $this->user, $this->password,array(
				\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
				\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES {$this->charset}",
		));
	}
	
	/**
	 * 获取连接
	 * @return \Library\Database\mixed
	 */
	public function getConnection() {
		return $this->connection;
	}
	
	public function execute($sql) {
		echo $sql;
	}
}
<?php
class MainController
{
	private $var = array();
	private $urlInfo = array();
	public function __construct()
	{
	}
	public function run($url)
	{
		$this->urlInfo[0] = $url;
		$this->urlInfo[1] = count($this->urlInfo[0]); 
		$flowControl = $this->flowControl();
		if(!$flowControl) {
			return false;
		} else {
			return true;
		}
	}
	public function flowControl()
	{
		switch ($this->urlInfo[1])
		{
			case 2 : 
				$this->var['controller'] = $this->urlInfo[0][0];
				$this->var['method'] = 'index';
			break;

			case 3 : 
				$this->var['controller'] = $this->urlInfo[0][1];
				$this->var['method'] = $this->urlInfo[0][2];
			break;

			case 4 : 
				$this->var['controller'] = $this->urlInfo[0][1];
				$this->var['method'] = $this->urlInfo[0][2];
				$this->var['param'] = $this->urlInfo[0][3];
			break;
		}
		$this->code = newCode($this->var);
	}
}
?>

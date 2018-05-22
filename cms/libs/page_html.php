<?
/**************************************/
/*		@ Pager						  */
/*		@ 							  */
/*		@ Designer AnVy				  */
/**************************************/
class listPage
{
	//public
	var $firstPage;
	var $endPage;
	var $lastPage;
	var $nextPage;
	var $thisPage;
	var $pageSize;
	var $rowNum;
	var $listNum;
	var $cssClass;
	var $splitStr;
	
	var $pageLast;
	var $pageNext;
	var $pageFirst;
	var $pageEnd;
	var $pageList;
	var $pageSelect;
	var $pageAll;
	
	var $links;
	
	
	var $thisUri;
	
	function listPage($rowNum,$pageSize = '10',$listNum = '8')
	{
		$this->rowNum = $rowNum;
		$this->pageSize = $pageSize;
		$this->listNum = $listNum;
		$this->splitStr = '&nbsp;';
		$this->lastPage = 'LastPage';
		$this->nextPage = 'NextPage';
		$this->firstPage = 'FirstPage';
		$this->endPage = 'EndPage';
		$this->thisUri = $_SERVER['REQUEST_URI'];
		preg_match('/_page_(.+?)\.html/is',$this->thisUri,$d);
		$this->thisPage = $d[1] ? $d[1] : 1;
	}
	
	function getPageNum()
	{
		if ($this->thisPage < 1)
			$this->thisPage = 1;
		if ($this->rowNum < 1)
			return 1;
		return ceil($this->rowNum/$this->pageSize);
	}
	
	function createSelect($s,$e)
	{
		$temp = array();
		$temp[] = '<select class="'.$this->cssClass.'" onchange="window.location=this.options[this.selectedIndex].value">';
		for($i = $s ; $i <= $e;$i ++)
			$temp[] = '<option value="'.$this->getLink($i).'" '.(($i == $this->thisPage)?'selected':'').'>'.$i;
		$temp[] = '<select>';
		return join(chr(13),$temp);		
	}
	
	function getLink($page){
		$url = preg_replace('/_page_(.+?)\.html/i','.html',$this->thisUri);
		return str_replace('.html','_page_'.$page.'.html',$url);
	}
	
	function createPage()
	{
		//$strWhere = $this->getStrWhere();
		$lastPage = $this->lastPage;
		$firstPage = $this->firstPage;
		$endPage = $this->endPage;
		$nextPage = $this->nextPage;
		$thisPage = $this->thisPage;
		$pageNum = $this->getPageNum();
		$listNum = $this->listNum;

		$startNum = $thisPage - (ceil($listNum/2)-1);
		if ($startNum < 1 ) $startNum = 1;
		$endNum = $startNum + $listNum - 1;
		if ($endNum > $pageNum) $endNum = $pageNum;
		
	
		$this->links['first'] = $this->getLink(1);
		$this->links['last'] = $this->getLink((($thisPage-1<1)?1:($thisPage-1)));
		$this->links['next'] =$this->getLink(($thisPage+1>$pageNum)?$pageNum:($thisPage+1));
		$this->links['end'] =$this->getLink($pageNum);
		$this->pageFirst = '<a href="'.$this->links['first'].'" class="'.$this->cssClass.'">'.$firstPage.'</a>'.$this->splitStr;
		$this->pageLast = '<a href="'.$this->links['last'].'" class="'.$this->cssClass.'">'.$lastPage.'</a>';
		$this->pageNext = '<a href="'.$this->links['next'].'" class="'.$this->cssClass.'">'.$nextPage.'</a>';
		$this->pageEnd = $this->splitStr.'<a href="'.$this->links['end'].'" class="'.$this->cssClass.'">'.$endPage.'</a>';
		
		$pageList;
		
		for($i = $startNum ; $i <= $endNum ; $i ++)
			if ($thisPage != $i)
				$pageList[] = '<a href="'.$this->getLink($i).'" class="'.$this->cssClass.'">'.$i.'</a>';
			else
				$pageList[] = '<a class="'.$this->cssClass.'"><b>'.$i.'</b></a>';
		$this->pageList = @ join($this->splitStr,$pageList);
		//$this->pageSelect = $this->createSelect($startNum,$endNum);
		$this->pageAll = $this->pageFirst.$this->splitStr.$this->pageLast.$this->splitStr.$this->pageList.$this->splitStr.$this->pageNext.$this->splitStr.$this->pageEnd;			
	}
}

//
//$obj = new listPage(22222222);
//$obj->createPage();
//echo $obj->thisPage,'<br>';
//echo $obj->thisUri,'<br>';
//echo $obj->pageAll;

?>
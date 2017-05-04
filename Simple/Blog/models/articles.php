<?php
	function articles_all()
	{
		$art1 = ["id"=>1, "title"=>"Title1", "date"=>"2013-21-12", "content"=>"Content1"];
		$art2 = ["id"=>2, "title"=>"Title2", "date"=>"2013-24-12", "content"=>"Content2"];
		$arr[0] = $arr1;
		$arr[1] = $arr2;

		return $arr;
	}

	function articles_get($id)
	{
		return ["id"=>1, "title"=>"Just zagol", "date"=>"2013-24-12", "content"=>"Just"];
	}

	function articles_new($title, $date, $content)
	{
		
	}

	function articles_edit($title, $date,$content)
	{
		
	}

	function articles_delete($id)
	{
		
	}
?>
<?php
class cash{
		public function query($string){
	$this->string=$string;
	$l=@mysql_query($this->string) or die(mysql_error());
	return $l;
		}
	
							public function getName($tid){
	$this->tid=$tid;
	$fetchub=$this->query("SElECT `name` FROM `bank` WHERE `bank_id`='{$this->tid}'");
	while($row=mysql_fetch_array($fetchub)){
		return $row['name'];
		}//while
		
		
							}
	
	
			public function fetchRecord($id,$key, $table){
			
		$this->id=$id;
		$this->key=$key;
		$this->table=$table;
		
			
		$fetch=@mysql_query("SELECT * FROM `{$this->table}` WHERE `senders_account_number`='{$this->id}' AND `key`='{$this->key}'") or die(mysql_error());
			
		return $fetch;
		
		}//fucntion FetchRecord

	
	
	
	
	
	
}
?>
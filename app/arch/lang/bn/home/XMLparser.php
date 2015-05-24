
<?php

class XMLparser {

		public function my_xpath($file, $path){
			$token = strtok($path, "/");
			$branch = simplexml_load_file($file);
			$temp;
			while (true)
			{
				echo $branch->getName() . "<br>";

				$token = strtok("/");
				if($token===false){
					if(count($branch)!==0) return "No value found in this path"."<br>";
					return $temp;
					break;
				}
				$flag = 0;
				$temp = "";
				foreach ($branch->children() as $child)
				{

					if($token == $child->getName()){
						$branch = $child;
						$flag = 1;
						//break;
					}
					if(count($branch)===0) $temp = $temp.$branch."<br>"; 
				    
				}
				if($flag==0){
					return "Path Not Found"."<br>";
					break;
				}

			}
		} 

		public function show_my_xml($file, $path){


			function recursion($current_tag, $space){

				for($i=0;$i<$space*2;$i++){
					echo "&nbsp;";
				}

				if(count($current_tag)==0) {
					echo "&lt". $current_tag->getName(). "&gt" . $current_tag."&lt/". $current_tag->getname(). "&gt ". "<br>";	
					return;
				}

				echo "&lt".$current_tag->getName()."&gt"." <br>"; 

			    foreach($current_tag->children() as $child){
			      recursion($child, $space+1);
			    }

			    for($i=0;$i<$space*2;$i++) echo "&nbsp";			
			    echo  "&lt/".$current_tag->getName()."&gt"."<br>"; 
			}

			$token = strtok($path, "/");
			$branch = simplexml_load_file($file);
			while (true)
			{
				//echo $branch->getName() . "<br>";

				$token = strtok("/");
				if($token===false){

					recursion($branch, 0);

					return "Success";
				}
				$flag = 0;
				foreach ($branch->children() as $child)
				{

					if($token == $child->getName()){
						$branch = $child;
						$flag = 1;
						break;
					}
				    
				}
				if($flag==0){
					return "Path Not Found"."<br>";
					break;
				}

			}


		} 




		public function add_attribure($file, $path, $tag, $value){
			$branch = simplexml_load_file($file);
			$forsave = $branch;
			$token = strtok($path, "/");
			while(true){
				echo $branch->getName() . "<br>";

				$token = strtok("/");
				if($token===false){

					$branch->addChild($tag, $value);
					
					$forsave->saveXML($file);
					return "success";
				}

				$flag = 0;
				foreach ($branch->children() as $child)
				{

					if($token == $child->getName()){
						$branch = $child;
						$flag = 1;
						break;
					}
				    
				}
				if($flag==0){
					return "Path Not Found"."<br>";
				}

			}
		}

		function remove_attribure($file, $path, $tag){
			$branch = simplexml_load_file($file);
			$forsave = $branch;
			$token = strtok($path, "/");
			while(true){
				echo $branch->getName() ."<br>";

				$token = strtok("/");
				if($token===false){
					foreach ($branch->children() as $child)
					{

						if($tag == $child->getName()){
							unset($child[0]);
							break;
						}
					}
					$forsave->saveXML($file);
					return "success"."<br>";
				}

				$flag = 0;
				foreach ($branch->children() as $child)
				{

					if($token == $child->getName()){
						$branch = $child;
						$flag = 1;
						break;
					}
				    
				}
				if($flag==0){
					return "Path Not Found"."<br>";
				}

			}
		}

		public function edit_attribure_value($file, $path, $tag, $newvalue){
			$branch = simplexml_load_file($file);
			$forsave = $branch;
			$token = strtok($path, "/");
			while(true){
				echo $branch->getName() ."<br>";

				$token = strtok("/");
				if($token===false){
					foreach ($branch->children() as $child)
					{

						if($tag == $child->getName()){
							unset($child[0]);
							$branch->addChild($tag, $newvalue);			
							$forsave->saveXML($file);
							break;
						}
					}
					$forsave->saveXML($file);
					return "success"."<br>";
				}

				$flag = 0;
				foreach ($branch->children() as $child)
				{

					if($token == $child->getName()){
						$branch = $child;
						$flag = 1;
						break;
					}
				    
				}
				if($flag==0){
					return "Path Not Found"."<br>";
				}

			}
		}


		/*
		echo "<ul id= songlist >\n";
		foreach ($mysongs as $songinfo):
		$title=$songinfo->title;
		$artist=$songinfo->artist;
		$date=$songinfo['dateplayed'];
		echo "<li><div class=title>".$title."</div><div class=artist>by ".$artist."</div><time>".$date."</time></li>\n";
		endforeach;
		echo "</ul>";
		*/

		
	}

	?> 


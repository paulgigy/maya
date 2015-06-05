<?php


		$jsTag="script";
		$jsTagType=" type='text/javascript'";
		
		$cssTag="link";
		$cssTagType=" type='text/css'";

		if(is_array($css_files)){
			foreach($css_files as $file){
				echo "<".$cssTag." rel='stylesheet' href='".base_url()."assets/css/".$file."'/>\n";
			}
		}

		if(is_array($css_plugin_files)){
				foreach($css_plugin_files as $file){
					echo "<".$cssTag." rel='stylesheet' href='".base_url()."assets/plugins/".$file."'/>\n";
				}
			}

		if(is_array($js_files)){	
			foreach($js_files as $file){
				echo "<".$jsTag." src='".base_url()."assets/js/".$file."'".$jsTagType."></".$jsTag.">\n";
			}

		}

		if(is_array($js_plugin_files)){
				foreach($js_plugin_files as $file){
					echo "<".$jsTag." src='".base_url()."assets/plugins/".$file."'".$jsTagType."></".$jsTag.">\n";
				}
			}

?>
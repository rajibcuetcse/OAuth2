<?php 
  

	function getAccessToken($api_key,$api_secret){
		
		$result = array();
		
		$requestParam = array("client_id"=>$api_key,"client_secret"=>$api_secret,'grant_type'=>'client_credentials');
		$service_url = API_ENDPOINT_GETACCESSTOKEN;
		 
		$responseData = processRequest($service_url,$requestParam);
                
                if (isset($responseData[API_RESPONSE_STR])) {
                        $data[API_DATA_STR] = $responseData[API_RESPONSE_STR];
                        $data[API_STATUS_STR] = "+000";
		} else {
			$data[API_DATA_STR] = "";
                        $data[API_STATUS_STR] = 0;
		}
                
                
                
		$result[API_STATUS_STR] = $data[API_STATUS_STR];
		
		 
	
		if($data[API_STATUS_STR] == API_SUCCESS_CODE){
			$result[API_DATA_STR] = $data[API_DATA_STR];
		} else {
			$result[API_DATA_STR] = $data[API_DATA_STR];
		}
	
		return $result;
	}

	function getProducts($api_key,$api_token){
		$requestParam = array("api_key"=>$api_key,"api_token"=>$api_token);
		$service_url = API_ENDPOINT_GETPRODUCTS;
	
		$data = processRequest($service_url."?access_token=".$api_token,$requestParam);
		 
		
		$result['balance'] = $data[0]['balance'];
		return $result;
	}


	function expireToken($api_key,$api_token){
		
		$result = array();
		
		$requestParam = array("client_id"=>$api_key);
		$service_url = API_ENDPOINT_EXPIRETOKEN;
	
		$responseData = processRequest($service_url."?&access_token=".$api_token,$requestParam);
		
                if (isset($responseData[API_RESPONSE_STR])) {
                        $data[API_DATA_STR] = $responseData[API_RESPONSE_STR];
                        $data[API_STATUS_STR] = "+000";
		} else {
			$data[API_DATA_STR] = "";
                        $data[API_STATUS_STR] = 0;
		}
		
	
	
		if($data[API_STATUS_STR] == API_SUCCESS_CODE){
			$result[API_DATA_STR] = $data[API_DATA_STR];
		} else {
			$result[API_DATA_STR] = $data[API_DATA_STR];
		}
                $result[API_STATUS_STR] = $data[API_STATUS_STR];

	
		return $result;
	 
	}

	function processRequest($service_url,$requestParam){
		$curl = curl_init($service_url);
		
		
		$curl_post_data =  json_encode($requestParam);
		
//		print_r($curl_post_data);exit;
		curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, false );
                curl_setopt( $curl, CURLOPT_HEADER, false );
                curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
                
//		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, rawurldecode(http_build_query( $requestParam )));
		$curl_response = curl_exec($curl);
		if ($curl_response === false) {
			$info = curl_getinfo($curl);
			curl_close($curl);
			die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);
//                print_r($curl_response);exit;
		$object = json_decode($curl_response);
		
		if(!empty($object)){
			$responseData = objectToArray($object);
		}
                return $responseData;
		 
		
//		$status  = $responseData[API_RESPONSE_STR][API_STATUS_STR];
		return $data;
	}
	
	function objectToArray($d) {
		if (is_object($d))
			$d = get_object_vars($d);
		return is_array($d) ? array_map(__METHOD__, $d) : $d;
	}

?>
<?php

require 'remoteconnector.php';

class Twitter extends RemoteConnector {

	public function searchTweetsByUser($searchTerm) {
		$searchTerm = urlencode($searchTerm);
		$url = "http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=$searchTerm";
		$xmlString = $this->get($url);
		$simpleXML = simplexml_load_string($xmlString);
		return $simpleXML;
	}
}
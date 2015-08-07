<?php

namespace Feedread\Service;

class FeedreadService
{

	public function getFeeds($feed_url)
	{
     
    	$content = file_get_contents($feed_url);
    	$feeds = new \SimpleXmlElement($content);
		return $feeds;

	}

}
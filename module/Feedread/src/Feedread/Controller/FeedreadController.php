<?php

namespace Feedread\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FeedreadController extends AbstractActionController
{
    public function indexAction()
    {

    	$FeedreadService = $this->getServiceLocator()->get('Feedread\Service\FeedreadService');
    	$feeds = $FeedreadService->getFeeds('http://feeds.feedburner.com/BlogDoEmpregoNoDf?format=xml');
        return new ViewModel(['feeds' => $feeds]);
        
    }
}

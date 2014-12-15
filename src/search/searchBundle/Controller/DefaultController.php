<?php

namespace search\searchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use search\searchBundle\Entity\SearchPalabra;
use \DateTime;
use \DateTimeZone;
use search\searchBundle\Classes\TwitterAPIExchange;

class DefaultController extends Controller
{
    public function busquedaAction()
    {
        return $this->render('searchBundle:Default:index.html.twig',array());
    }

    public function searchAction(Request $request){
    	$key = $request->query->get('key');
    	$keys=$this->actualizarKey($key);
    	$k1= array();
    	foreach($keys as $k){
    		$k1[]=array("name"=>$k->getNombre(),
                "date"=>$k->getTime()->setTimezone(new DateTimeZone('America/Bogota'))->format('Y-m-d H:i:s'));
    	}
    	$response = new Response(json_encode(array("history"=>$k1,"tweets"=>$this->getTweets($key))));
		$response->headers->set('Content-Type', 'application/json');
		return $response;    
	}

	public function actualizarKey($key){
		$em = $this->getDoctrine()->getManager();
		$time = new DateTime('NOW');
		$repository=$em->getRepository('searchBundle:SearchPalabra');
    	$entityKey = new SearchPalabra();
    	$entityKey->setNombre($key);
    	$entityKey->setTime($time);	
    	$em->persist($entityKey);
		$em->flush();
		return  $repository->findBy(array(),array('time' => 'DESC'));
	}

    public function getTweets($key){
        $settings = array(
            'oauth_access_token' => "596615153-FpsQWMsEDGySHbQxuB48FBFQd7VKLZx3wRqDVCz1",
            'oauth_access_token_secret' => "agWBoqHlnIdpZ3z6eJUQySm7uMqYTTvA8CYJCDbDbVzpU",
            'consumer_key' => "BrHuCVxSO8sjvaEb7wJA3tt9f",
            'consumer_secret' => "a5Fes71Zguqlet9X8ZPfGYGFHGR1IhiVZr8lOLeag3cZHCkxJa");
        $url="https://api.twitter.com/1.1/search/tweets.json";
        $fields="?q={$key}&result_type=recent&count=10";
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        $data =  $twitter->setGetfield($fields)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();
        $tweets=json_decode($data);
        $tweets_count = count($tweets->statuses);
        $tweets_return=array();
        for($i=0;$tweets_count>$i; $i++){
            $tweet= $tweets->statuses[$i];
            $user= $tweet->user;
            $date = new DateTime($tweet->created_at);
            $date->setTimezone(new DateTimeZone('America/Bogota'));
            $formatted_date = $date->format('Y-m-d H:i:s');
            $tweet_data=array('text'=>$tweet->text,
                'user'=> $user->screen_name,
                'img'=>$user->profile_image_url,
                'time'=>$formatted_date);
            $tweets_return[]=$tweet_data; 
        }
        return $tweets_return;
    }

}

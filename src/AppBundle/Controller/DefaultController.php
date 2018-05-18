<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use AppBundle\Document\Tweet;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/twitter", name="get_twitter")
     */
    public function getTwitterAction(Request $request)
    {
        $connection = new TwitterOAuth('c3xA7ljueARGf2xotSnE7Zpiq', '8B167u7wLDoDL4JHOgbTrUcoE8wGlOMApCY1aqFs2jqvaKW9Qo', '549983690-9hBiemayMMuZDyuqRkW8XbGBojQemWLvAz5J0DDF', 'aeLtcCDVoiGz0ctgGMxQSsyqTW7QMqT5JLAGniWnOUaTj');
        $statuses = $connection->get("search/tweets", ["q" => "football"]);

        $array_statuses = json_decode(json_encode($statuses), true);

        foreach ($array_statuses["statuses"] as $statue){
            //dump($statue);
            $tweet = new Tweet();
            $tweet->setCreatedAt($statue['created_at']);
            $tweet->setText($statue['text']);
            $tweet->setRetweetCount($statue['retweet_count']);
            $tweet->setLang($statue['lang']);
            $tweet->setUserScreenName($statue['user']['screen_name']);
            $tweet->setUserLocation($statue['user']['location']);
            $tweet->setUserFollowersCount($statue['user']['followers_count']);
            $tweet->setUserFriendsCount($statue['user']['friends_count']);
            $tweet->setUserStatusesCount($statue['user']['statuses_count']);
            $tweet->setUserLang($statue['user']['lang']);

            $dm = $this->get('doctrine_mongodb')->getManager();
            //var_dump($dm);die;
            $dm->persist($tweet);
            $dm->flush();
        }

        die;


        // replace this example code with whatever you need
        /*return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);*/
    }
}

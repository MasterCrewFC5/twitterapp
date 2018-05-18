<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Tweet
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="date")
     */
    protected $created_at;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $text;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $retweet_count;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $lang;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $user_screen_name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $user_location;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $user_followers_count;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $user_friends_count;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $user_statuses_count;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $user_lang;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createdAt
     *
     * @param date $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return date $createdAt
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Get text
     *
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set retweetCount
     *
     * @param int $retweetCount
     * @return $this
     */
    public function setRetweetCount($retweetCount)
    {
        $this->retweet_count = $retweetCount;
        return $this;
    }

    /**
     * Get retweetCount
     *
     * @return int $retweetCount
     */
    public function getRetweetCount()
    {
        return $this->retweet_count;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return $this
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Get lang
     *
     * @return string $lang
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set userScreenName
     *
     * @param string $userScreenName
     * @return $this
     */
    public function setUserScreenName($userScreenName)
    {
        $this->user_screen_name = $userScreenName;
        return $this;
    }

    /**
     * Get userScreenName
     *
     * @return string $userScreenName
     */
    public function getUserScreenName()
    {
        return $this->user_screen_name;
    }

    /**
     * Set userLocation
     *
     * @param string $userLocation
     * @return $this
     */
    public function setUserLocation($userLocation)
    {
        $this->user_location = $userLocation;
        return $this;
    }

    /**
     * Get userLocation
     *
     * @return string $userLocation
     */
    public function getUserLocation()
    {
        return $this->user_location;
    }

    /**
     * Set userFollowersCount
     *
     * @param int $userFollowersCount
     * @return $this
     */
    public function setUserFollowersCount($userFollowersCount)
    {
        $this->user_followers_count = $userFollowersCount;
        return $this;
    }

    /**
     * Get userFollowersCount
     *
     * @return int $userFollowersCount
     */
    public function getUserFollowersCount()
    {
        return $this->user_followers_count;
    }

    /**
     * Set userFriendsCount
     *
     * @param int $userFriendsCount
     * @return $this
     */
    public function setUserFriendsCount($userFriendsCount)
    {
        $this->user_friends_count = $userFriendsCount;
        return $this;
    }

    /**
     * Get userFriendsCount
     *
     * @return int $userFriendsCount
     */
    public function getUserFriendsCount()
    {
        return $this->user_friends_count;
    }

    /**
     * Set userStatusesCount
     *
     * @param int $userStatusesCount
     * @return $this
     */
    public function setUserStatusesCount($userStatusesCount)
    {
        $this->user_statuses_count = $userStatusesCount;
        return $this;
    }

    /**
     * Get userStatusesCount
     *
     * @return int $userStatusesCount
     */
    public function getUserStatusesCount()
    {
        return $this->user_statuses_count;
    }

    /**
     * Set userLang
     *
     * @param string $userLang
     * @return $this
     */
    public function setUserLang($userLang)
    {
        $this->user_lang = $userLang;
        return $this;
    }

    /**
     * Get userLang
     *
     * @return string $userLang
     */
    public function getUserLang()
    {
        return $this->user_lang;
    }
}

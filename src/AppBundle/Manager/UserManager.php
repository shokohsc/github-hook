<?php

namespace AppBundle\Manager;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

/**
 * UserManager
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserManager
{
    private $em;
    private $userRepository;

    public function __construct( EntityManagerInterface $em )
    {
        $this->em = $em;
        $this->userRepository = $this->em->getRepository('AppBundle:User');
    }

    public function getUserFromSenderPayload( $payloadSender )
    {
        if( null === $sender = $this->userRepository->findOneByLogin($payloadSender->login)) {
            $sender = new User();

            $sender
                ->setUrl($payloadSender->url)
                ->setType($payloadSender->type)
                ->setGithubId($payloadSender->id)
                ->setLogin($payloadSender->login)
                ->setHtmlUrl($payloadSender->html_url)
                ->setReposUrl($payloadSender->repos_url)
                ->setEventsUrl($payloadSender->events_url)
                ->setSiteAdmin($payloadSender->site_admin)
                ->setAvatarUrl($payloadSender->avatar_url)
                ->setStarredUrl($payloadSender->starred_url)
                ->setGravatarUrl($payloadSender->gravatar_id)
                ->setFollowersUrl($payloadSender->followers_url)
                ->setFollowingUrl($payloadSender->following_url)
                ->setSubscriptionsUrl($payloadSender->subscriptions_url)
                ->setOrganizationsUrl($payloadSender->organizations_url)
                ->setReceivedEventsUrl($payloadSender->received_events_url);

            $this->em->persist($sender);
            $this->em->flush();
        }

        return $sender;
    }

}

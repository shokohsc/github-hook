<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class HookController extends Controller
{
    /**
     * @Route("/hook", name="hook")
     * @Method({ "POST" })
     */
    public function hookAction( Request $request )
    {
        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $em   = $this->getDoctrine()->getManager();
            $data = json_decode($request->getContent());

            $userManager = $this->get('app.user_manager');
            $commitManager = $this->get('app.commit_manager');
            $payloadManager = $this->get('app.payload_manager');
            $repositoryManager = $this->get('app.repository_manager');

            $payload    = $payloadManager->getPayloadFromRawPayload($data);
            $user       = $userManager->getUserFromSenderPayload($data->sender);
            $repository = $repositoryManager->getRepositoryFromPayload($data->repository);

            $commitManager->saveCommitsFromPayload( $data->commits , $user , $repository , $payload  );
        }


        return new Response('Thx');
    }

}

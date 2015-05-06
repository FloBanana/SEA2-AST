<?php
// src/sea2/astBundle/Controller/PageController.php

namespace sea2\astBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function trackAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $track = $em->getRepository('sea2astBundle:Track')->find($id);

        $track->setDate($track->getDate()->format('d-m-y'));
        $track->setStarttime($track->getStarttime()->format('h:m'));
        $track->setEndtime($track->getEndtime()->format('h:m'));
        $hours = (int)($track->getDuration()/3600);
        $seconds = $track->getDuration()%3600;
        $minutes = (int)($seconds/60);
        $seconds = $seconds%60;
        $track->setDuration($hours.':'.$minutes.':'.$seconds);

        return $this->render('sea2astBundle:Page:track.html.twig', array(
            'track' => $track
        ));
    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $track = $em->getRepository('sea2astBundle:Track')
            ->getLatestTrack(1);

        $notifications = $em->getRepository('sea2astBundle:Notification')
            ->getNotificationsForUser(1);

        return $this->render('sea2astBundle:Page:index.html.twig', array(
            'track' => $track,
            'notifications' => $notifications
        ));
    }
	
	public function tracksAction()
	{
        $em = $this->getDoctrine()->getEntityManager();

        $tracks = $em->getRepository('sea2astBundle:Track')
            ->getTracksForUser(1);

        return $this->render('sea2astBundle:Page:tracks.html.twig', array(
            'tracks' => $tracks
        ));
	}
	
	public function loginAction()
	{
		return $this->render('sea2astBundle:Page:login.html.twig');
	}
}
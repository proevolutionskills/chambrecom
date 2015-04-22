<?php

namespace siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('acceuilBundle:Default:index.html.twig');
    }

    public function servicesAction() {
        return $this->render('acceuilBundle:Default:services.html.twig');
    }

    public function organisationAction() {
        return $this->render('acceuilBundle:Default:organisation.html.twig');
    }

    public function nosevenementsAction() {
        return $this->render('acceuilBundle:Default:nosevenements.html.twig');
    }

    public function networkingAction() {
        return $this->render('acceuilBundle:Default:networking.html.twig');
    }

    public function partenariatAction() {
        return $this->render('acceuilBundle:Default:partenariat.html.twig');
    }

    public function regimeAction() {
        return $this->render('acceuilBundle:Default:regime_et_formalite.html.twig');
    }

    public function cadreAction() {
        return $this->render('acceuilBundle:Default:cadre_dinvestissement.html.twig');
    }

    public function jtunisAction() {
        return $this->render('acceuilBundle:Default:jours_feriers_tunis.html.twig');
    }

    public function jsuisseAction() {
        return $this->render('acceuilBundle:Default:jours_feriers_suisse.html.twig');
    }

    public function liensAction() {
        return $this->render('acceuilBundle:Default:liens.html.twig');
    }

    public function membreAction() {
        return $this->render('acceuilBundle:Default:devenir_membre.html.twig');
    }

    public function contactAction() {
        return $this->render('acceuilBundle:Default:contact-us.html.twig');
    }

    public function evenementAction() {
        return $this->render('acceuilBundle:Default:evenement.html.twig');
    }

    public function pdfAction() {
        return $this->render('acceuilBundle:Default:Formulaire_adhésion_CCITNCH.pdf');
    }

    public function formulaireAction() {
        return $this->render('acceuilBundle:Default:formulaire.html.twig');
    }

    public function downloadAction($filename) {
        $request = $this->get('request');
        $path = $this->get('kernel')->getRootDir() . "/../web/bundles/acceuil/file/";
        $content = file_get_contents($path . $filename);

        $response = new Response();

        //set headers
        $response->headers->set('Content-Type', 'mime/type');
        $response->headers->set('Content-Disposition', 'attachment;filename="' . $filename);

        $response->setContent($content);
        return $response;
    }

}

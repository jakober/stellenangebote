<?php

declare(strict_types=1);

namespace Bairle\ContaoBairleStellenangeboteBundle\Controller\FrontendModule;

use Bairle\ContaoBairleStellenangeboteBundle\Model\StellenangeboteModel;
use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsFrontendModule;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Contao\FrontendTemplate;
use Contao\ModuleModel;
use Contao\Input;
use Contao\Controller;
use Contao\FilesModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsFrontendModule(category: 'stellenangebote_list', type: StellenangeboteSingleController::TYPE)]
class StellenangeboteSingleController extends AbstractFrontendModuleController
{
    public const TYPE = 'stellenangebot_single';

    protected function getResponse(FragmentTemplate $template, ModuleModel $model, Request $request): Response
    {
        $alias = Input::get('auto_item');
        $job = StellenangeboteModel::findOneByAlias($alias);

        if (!$job) {
            return new Response('Stellenangebot nicht gefunden.', Response::HTTP_NOT_FOUND);
        }

        // HTML5 Template erzwingen
        $html5Template = new FrontendTemplate('mod_stellenangebot_single');
        $html5Template->setData($model->row());

        // Bild-URL generieren
        if ($job->singleSRC) {
            $file = FilesModel::findByUuid($job->singleSRC);
            if ($file) {
                $html5Template->imagePath = $file->path;
            }
        }

        // Formular parsen
        if ($job->form_id) {
            $html5Template->jobForm = Controller::getForm($job->form_id);
        }

        $html5Template->job = $job->row();

        return new Response($html5Template->parse());
    }
}
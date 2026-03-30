<?php

declare(strict_types=1);

namespace Bairle\ContaoBairleStellenangeboteBundle\Controller\FrontendModule;

use Bairle\ContaoBairleStellenangeboteBundle\Model\StellenangeboteModel;
use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsFrontendModule;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Contao\FrontendTemplate;
use Contao\ModuleModel;
use Contao\PageModel;
use Contao\StringUtil;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsFrontendModule(category: 'stellenangebote_list', type: KarriereListingController::TYPE)]
class KarriereListingController extends AbstractFrontendModuleController
{
    public const TYPE = 'karriere_listing';

    protected function getResponse(FragmentTemplate $template, ModuleModel $model, Request $request): Response
    {
        $jobs = StellenangeboteModel::findAll();
        $detailPage = PageModel::findByPk(12); // ID deiner Detailseite

        $items = [];
        if ($jobs) {
            foreach ($jobs as $job) {
                $items[] = [
                    'title' => $job->title,
                    'link'  => $detailPage ? $detailPage->getFrontendUrl('/' . $job->alias) : '#',
                ];
            }
        }

        // HTML5 Template erzwingen
        $html5Template = new FrontendTemplate('mod_karriere_listing');

        // CSS ID und Klassen des Moduls sicher übergeben (verhindert den unserialize-Fehler)
        $css = StringUtil::deserialize($model->cssID, true);
        $html5Template->class = $model->cssClass ?? '';
        $html5Template->cssID = !empty($css[0]) ? ' id="' . $css[0] . '"' : '';

        // Jobs an das Template übergeben
        $html5Template->jobs = $items;

        return new Response($html5Template->parse());
    }
}
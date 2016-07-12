<?php

namespace GentelellaDemo;

use OLOG\BT;
use OLOG\BT\InterfaceBreadcrumbs;
use OLOG\BT\InterfacePageTitle;

class DemoAction implements InterfaceBreadcrumbs, InterfacePageTitle, BT\InterfaceUserName
{
    public function currentUserName()
    {
        return 'Demo User';
    }

    public function currentBreadcrumbsArr()
    {
		return array_merge([BT::a('/', '', 'glyphicon glyphicon-home')], [BT::a('/admin/', '', 'glyphicon glyphicon-wrench')], [BT::a(self::getUrl(), self::currentPageTitle(), 'title')]);
    }

    public function currentPageTitle()
    {
        return 'TEST PAGE TITLE';
    }

    static public function getUrl(){
        return '/';
    }
    
    public function action(){
        $html = '<div>TEST CONTENT</div>';

        \OLOG\Gentelella\Layout::render($html, $this);
    }
}
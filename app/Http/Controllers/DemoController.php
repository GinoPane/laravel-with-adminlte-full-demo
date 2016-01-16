<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DemoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $demoSections = [
        'starter' => 'dashboard.starter',
        'dashboard_v1' => 'dashboard.index',
        'dashboard_v2' => 'dashboard.index2',
        'layout-top-nav' => 'layouts.top-nav',
        'layout-boxed' => 'layouts.boxed',
        'layout-fixed' => 'layouts.fixed',
        'layout-collapsed-sidebar' => 'layouts.collapsed-sidebar',
        'widgets' => 'widgets',
        'chart-chartjs' => 'charts.chartjs',
        'chart-morris' => 'charts.morris',
        'chart-flot' => 'charts.flot',
        'chart-inline' => 'charts.inline',
        'ui-general' => 'ui.general',
        'ui-icons' => 'ui.icons',
        'ui-buttons' => 'ui.buttons',
        'ui-sliders' => 'ui.sliders',
        'ui-timeline' => 'ui.timeline',
        'ui-modals' => 'ui.modals',
        'form-general' => 'forms.general',
        'form-advanced' => 'forms.advanced',
        'form-editors' => 'forms.editors',
        'table-simple' => 'tables.simple',
        'table-data' => 'tables.data',
        'calendar' => 'calendar',
        'mailbox' => 'mailbox.mailbox',
        'mailbox-compose' => 'mailbox.compose',
        'mailbox-read' => 'mailbox.read',
        'example-invoice' => 'examples.invoice',
        'example-invoice-print' => 'examples.invoice-print',
        'example-profile' => 'examples.profile',
        'example-login' => 'examples.login',
        'example-register' => 'examples.register',
        'example-lockscreen' => 'examples.lockscreen',
        'example-404' => 'examples.404',
        'example-500' => 'examples.500',
        'example-blank' => 'examples.blank',
        'example-pace' => 'examples.pace',
        'documentation' => 'documentation',
    ];

    protected $defaultPath = 'content.backend.demo.';

    public function index($section = 'starter')
    {
        if (!empty($this->demoSections[$section])) {
            return view($this->defaultPath.$this->demoSections[$section]);
        } else {
            return view(404);
        }
    }
}

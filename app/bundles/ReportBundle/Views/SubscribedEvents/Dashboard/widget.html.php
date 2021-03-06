<?php
/**
 * @package     Mautic
 * @copyright   2016 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

echo $view->render(
    'MauticCoreBundle:Helper:chart.html.php',
    [
        'chartData'   => $chartData,
        'chartType'   => $chartType,
        'chartHeight' => $chartHeight
    ]
);
?>

<div class="pull-right mr-md mb-md">
    <a href="<?php echo $view['router']->path('mautic_report_action', ['objectId' => $reportId, 'objectAction' => 'view', 'daterange' => ['date_to' => $dateTo->format('Y-m-d H:i:s'), 'date_from' => $dateFrom->format('Y-m-d H:i:s')]]); ?>">
        <span class="label label-success"><?php echo $view['translator']->trans('mautic.report.dashboard.widgets.full_report'); ?></span>
    </a>
</div>
<div class="clearfix"></div>

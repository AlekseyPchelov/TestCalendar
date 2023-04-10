<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Calendar';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="sticky-top mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Draggable Events</h4>
                        </div>
                        <div class="card-body">
                            <div id="external-events">
                                <div class="external-event bg-success ui-draggable ui-draggable-handle" style="position: relative;">Lunch</div>
                                <div class="external-event bg-warning ui-draggable ui-draggable-handle" style="position: relative;">Go home</div>
                                <div class="external-event bg-info ui-draggable ui-draggable-handle" style="position: relative;">Do homework</div>
                                <div class="external-event bg-primary ui-draggable ui-draggable-handle" style="position: relative;">Work on UI design</div>
                                <div class="external-event bg-danger ui-draggable ui-draggable-handle" style="position: relative;">Sleep tight</div>
                                <div class="checkbox">
                                    <label for="drop-remove">
                                        <input type="checkbox" id="drop-remove">
                                        remove after drop
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Create Event</h3>
                        </div>
                        <div class="card-body">
                            <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                <ul class="fc-color-picker" id="color-chooser">
                                    <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                                    <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                                    <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                                    <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                                    <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                                </ul>
                            </div>
                            <div class="input-group">
                                <input id="new-event" type="text" class="form-control" placeholder="Event Title">
                                <div class="input-group-append">
                                    <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card card-primary">
                    <div class="card-body p-0">

                        <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap">
                            <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                <div class="fc-toolbar-chunk">
                                    <div class="btn-group">
                                        <button type="button" title="Previous month" aria-pressed="false"
                                                class="fc-prev-button btn btn-primary"><span
                                                    class="fa fa-chevron-left"></span></button>
                                        <button type="button" title="Next month" aria-pressed="false"
                                                class="fc-next-button btn btn-primary"><span
                                                    class="fa fa-chevron-right"></span></button>
                                    </div>
                                    <button type="button" title="This month" disabled="" aria-pressed="false"
                                            class="fc-today-button btn btn-primary">today
                                    </button>
                                </div>
                                <div class="fc-toolbar-chunk"><h2 class="fc-toolbar-title" id="fc-dom-1">April
                                        2023</h2></div>
                                <div class="fc-toolbar-chunk">
                                    <div class="btn-group">
                                        <button type="button" title="month view" aria-pressed="true"
                                                class="fc-dayGridMonth-button btn btn-primary active">month
                                        </button>
                                        <button type="button" title="week view" aria-pressed="false"
                                                class="fc-timeGridWeek-button btn btn-primary">week
                                        </button>
                                        <button type="button" title="day view" aria-pressed="false"
                                                class="fc-timeGridDay-button btn btn-primary">day
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active"
                                 style="height: 515.556px;">
                                <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                                    <table role="grid"
                                           class="fc-scrollgrid table-bordered fc-scrollgrid-liquid">
                                        <thead role="rowgroup">
                                        <tr role="presentation"
                                            class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                            <th role="presentation">
                                                <div class="fc-scroller-harness">
                                                    <div class="fc-scroller" style="overflow: hidden;">
                                                        <table role="presentation" class="fc-col-header "
                                                               style="width: 694px;">
                                                            <colgroup></colgroup>
                                                            <thead role="presentation">
                                                            <tr role="row">
                                                                <th role="columnheader"
                                                                    class="fc-col-header-cell fc-day fc-day-sun">
                                                                    <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Sunday"
                                                                                class="fc-col-header-cell-cushion ">Sun</a>
                                                                    </div>
                                                                </th>
                                                                <th role="columnheader"
                                                                    class="fc-col-header-cell fc-day fc-day-mon">
                                                                    <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Monday"
                                                                                class="fc-col-header-cell-cushion ">Mon</a>
                                                                    </div>
                                                                </th>
                                                                <th role="columnheader"
                                                                    class="fc-col-header-cell fc-day fc-day-tue">
                                                                    <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Tuesday"
                                                                                class="fc-col-header-cell-cushion ">Tue</a>
                                                                    </div>
                                                                </th>
                                                                <th role="columnheader"
                                                                    class="fc-col-header-cell fc-day fc-day-wed">
                                                                    <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Wednesday"
                                                                                class="fc-col-header-cell-cushion ">Wed</a>
                                                                    </div>
                                                                </th>
                                                                <th role="columnheader"
                                                                    class="fc-col-header-cell fc-day fc-day-thu">
                                                                    <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Thursday"
                                                                                class="fc-col-header-cell-cushion ">Thu</a>
                                                                    </div>
                                                                </th>
                                                                <th role="columnheader"
                                                                    class="fc-col-header-cell fc-day fc-day-fri">
                                                                    <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Friday"
                                                                                class="fc-col-header-cell-cushion ">Fri</a>
                                                                    </div>
                                                                </th>
                                                                <th role="columnheader"
                                                                    class="fc-col-header-cell fc-day fc-day-sat">
                                                                    <div class="fc-scrollgrid-sync-inner"><a
                                                                                aria-label="Saturday"
                                                                                class="fc-col-header-cell-cushion ">Sat</a>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody role="rowgroup">
                                        <tr role="presentation"
                                            class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                            <td role="presentation">
                                                <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                                    <div class="fc-scroller fc-scroller-liquid-absolute"
                                                         style="overflow: hidden auto;">
                                                        <div class="fc-daygrid-body fc-daygrid-body-unbalanced "
                                                             style="width: 694px;">
                                                            <table role="presentation"
                                                                   class="fc-scrollgrid-sync-table"
                                                                   style="width: 694px; height: 483px;">
                                                                <colgroup></colgroup>
                                                                <tbody role="presentation">
                                                                <tr role="row">
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
</div>
</div>


<?php

/**
 * Creates a link or url to a given resource.
 *
 * @param $resource
 */
function api_link($resource)
{
    return page_link_to('api') . '&r=' . $resource;
}

function getApiShifts()
{
    $dbResult = sql_select(
        "SELECT s.*, r.Name as locationName, r.location, r.lat, r.long FROM `Shifts` s INNER JOIN `Room` r ON r.`RID` = s.`RID` GROUP BY s.`SID` ORDER BY s.`start`"
    );

    $currentTime = time();
    $result = array();
    foreach ($dbResult as $shift) {
        if ($shift['start'] > $currentTime || $shift['end'] > $currentTime) {
            $result[] = $shift;
        }
    }

    return $result;
}

function api_controller()
{
    $resource = isset($_REQUEST['r']) ? $_REQUEST['r'] : null;

    if (null === $resource) {
        error(_('no resource given.'));

        return;
    }

    $result = '';

    switch ($resource) {
        case 'shifts':
            $result = getApiShifts();
            break;
        default:
            error('Unknown resource %s', $resource);
    }

    return $result;
}

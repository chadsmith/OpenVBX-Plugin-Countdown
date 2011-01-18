<?php
$date = AppletInstance::getValue('date');
$before = AppletInstance::getValue('before');
$now = AppletInstance::getValue('now');
$after = AppletInstance::getValue('after');

$date = strtotime($date);
$date = mktime(0, 0, 0, date('m', $date), date('d', $date), date('Y', $date));
$today = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

$response = new Response();

if($date==$today)
	$reply = $now;
else{
	$days = floor(abs(($date - $today) / 86400));
	$days = $days . ' day' . (1<$days ? 's' : '');
	$reply = str_replace('%days%', $days, $date<$today ? $after : $before);
}

if(AppletInstance::getFlowType() == 'voice')
	$response->addSay($reply);
else
	$response->addSms($reply);

$next = AppletInstance::getDropZoneUrl('next');
if(!empty($next))
	$response->addRedirect($next);

$response->Respond();

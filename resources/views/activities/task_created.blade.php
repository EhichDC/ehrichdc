<p><strong>{{ $activity->getExtraProperty('task') ? $activity->getExtraProperty('task') : '' }}</strong> <strong>{{ $activity->getExtraProperty('creator') ? 'erstellt von' . $activity->getExtraProperty('creator') : ''  }}</strong>.</p>
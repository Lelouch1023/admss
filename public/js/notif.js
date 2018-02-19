function markNotificationAsRead(notifCount){
	var get = appURL +"/markAsRead";
	if(notifCount !== 0){
  		$.get(get);
  		$('#notifCount').hide();
  		//console.log(get);
	}
	
}


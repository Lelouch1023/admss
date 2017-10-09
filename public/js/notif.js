function markNotificationAsRead(notifCount){

	if(notifCount !== '0'){
  		$.get('/markAsRead');
  		
	}
	
}


<html>
	<head>
  </head>	
	<body>
		
		
		
		
		
		
<script async defer src="https://connect.facebook.net/en_US/sdk.js">
		
		
  window.fbAsyncInit = function() {
    FB.init({
      appId            : 'your App Id # HERE',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v5.0'
    });
  };
			FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    // The user is logged in and has authenticated your
    // app, and response.authResponse supplies
    // the user's ID, a valid access token, a signed
    // request, and the time the access token 
    // and signed request each expire.
    var uid = response.authResponse.userID;
    var accessToken = response.authResponse.accessToken;
  } else if (response.status === 'not_authorized') {
    // The user hasn't authorized your application.  They
    // must click the Login button, or you must call FB.login
    // in response to a user gesture, to launch a login dialog.
  } else {
    // The user isn't logged in to Facebook. You can launch a
    // login dialog with a user gesture, but the user may have
    // to log in to Facebook before authorizing your application.
  }
 });
			FB.getLoginStatus(function(response) {
  // this will be called when the roundtrip to Facebook has completed
}, true);
			FB.Event.subscribe(event, callback)
</script>
		
	</body>
</html>

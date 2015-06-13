/**
 * @copyright	Copyright (c) 2015 R2H (http://www.r2h.nl). All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1598273927107244',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

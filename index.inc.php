<?php 

if (basename(__FILE__) == basename($_SERVER['PHP_SELF']))
{
    exit(0);
}

echo '<?xml version="1.0" encoding="utf-8"?>';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<head>
  <title>SLAy ProXy - SiL3Si4 Und3rGr0unD</title>
  <link rel="stylesheet" type="text/css" href="style.css" title="Default Theme" media="all" />
  <link rel="shortcut icon" href="http://cdn.add0n.com/icons/useragent-switcher16.png">
</head>
<body onload="document.getElementById('address_box').focus()">
<body background="http://antyweb.pl/wp-content/uploads/2015/05/flaga-Polski.jpeg">
<div id="container">
<center><img src='http://inoxfer.eu/images/slay.png' width="200" height="200"/>
  <h1 id="title">SLAy ProXy</h1></center><br>
  
<?php

switch ($data['category'])
{
    case 'auth':
?>
  <div id="auth"><p>
  <b>Enter your username and password for "<?php echo htmlspecialchars($data['realm']) ?>" on <?php echo $GLOBALS['_url_parts']['host'] ?></b>
  <form method="post" action="">
    <input type="hidden" name="<?php echo $GLOBALS['_config']['basic_auth_var_name'] ?>" value="<?php echo base64_encode($data['realm']) ?>" />
    <label>Username <input type="text" name="username" value="" /></label> <label>Password <input type="password" name="password" value="" /></label> <input type="submit" value="Login" />
  </form></p></div>
<?php
        break;
    case 'error':
        echo '<div id="error"><p>';
        
        switch ($data['group'])
        {
            case 'url':
                echo '<b>URL Error (' . $data['error'] . ')</b>: ';
                switch ($data['type'])
                {
                    case 'internal':
                        $message = 'Failed to connect to the specified host. '
                                 . 'Possible problems are that the server was not found, the connection timed out, or the connection refused by the host. '
                                 . 'Try connecting again and check if the address is correct.';
                        break;
                    case 'external':
                        switch ($data['error'])
                        {
                            case 1:
                                $message = 'The URL you\'re attempting to access is blacklisted by this server. Please select another URL.';
                                break;
                            case 2:
                                $message = 'The URL you entered is malformed. Please check whether you entered the correct URL or not.';
                                break;
                        }
                        break;
                }
                break;
            case 'resource':
                echo '<b>Resource Error:</b> ';
                switch ($data['type'])
                {
                    case 'file_size':
                        $message = 'The file your are attempting to download is too large.<br />'
                                 . 'Maxiumum permissible file size is <b>' . number_format($GLOBALS['_config']['max_file_size']/1048576, 2) . ' MB</b><br />'
                                 . 'Requested file size is <b>' . number_format($GLOBALS['_content_length']/1048576, 2) . ' MB</b>';
                        break;
                    case 'hotlinking':
                        $message = 'It appears that you are trying to access a resource through this proxy from a remote Website.<br />'
                                 . 'For security reasons, please use the form below to do so.';
                        break;
                }
                break;
        }
        
        echo 'An error has occured while trying to browse through the proxy. <br />' . $message . '</p></div>';
        break;
}
?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <ul id="form">
      <li id="address_bar"><label>Web Address <input id="address_box" type="text" name="<?php echo $GLOBALS['_config']['url_var_name'] ?>" value="<?php echo isset($GLOBALS['_url']) ? htmlspecialchars($GLOBALS['_url']) : '' ?>" onfocus="this.select()" /></label> <input id="go" type="submit" value="Go" /></li>
      <?php
      
      foreach ($GLOBALS['_flags'] as $flag_name => $flag_value)
      {
          if (!$GLOBALS['_frozen_flags'][$flag_name])
          {
              echo '<li class="option"><label><input type="checkbox" name="' . $GLOBALS['_config']['flags_var_name'] . '[' . $flag_name . ']"' . ($flag_value ? ' checked="checked"' : '') . ' />' . $GLOBALS['_labels'][$flag_name][1] . '</label></li>' . "\n";
          }
      }
      ?>
    </ul>
  </form>
  <!-- The least you could do is leave this link back as it is. This software is provided for free and I ask nothing in return except that you leave this link intact
       You're more likely to recieve support should you require some if I see a link back in your installation than if not -->
  

    <br><br><br>
    <div id="container">
<div style="width:100%;margin:0;text-align:left;border-bottom:1px solid #ffffff;color:#ffffff;font-size:12px;font-weight:bold;font-family:Bitstream Vera Sans,arial,sans-serif;padding:4px;">
<h3>Browse the Internet Anonymously</h3>
There are several benefits associated with browsing the internet anonymously using online proxy. With online anonymous proxy, you can basically access any website including those that are blocked like instagram, facebook..buzzfeed, ebay shop et.... It also makes it possible for you to restore access to sites that are restricted by the website owners using filter settings.  <br><br><br>  
    <strong>Greatz:</strong> SuZ4N | M4D MaX | De vinclous | Cybertaziex | SvO | Distronity | w03lv3r1n3 | Chidori | Mr.Dementor | HVM99 | Ricky Prohead | P4kt4n1 | bL4ck HoleS | BL4ckc0d1n6 | Tebe4rt | Sheep139 |  Detol cyber | Frozen Heart | Mbee cyber | Rebellion Cyber | Worfreeid Crew | Seven crew Team | P.H.C. | AnonOps Poland | xXx Team | Team Venom | AnonGhost Team | All polish & indonesian Defacers... 

</p></div></div>
<div id="container">
<div style="width:100%;margin:0;text-align:right;color:#ffffff;font-size:12px;font-weight:bold;font-family:Bitstream Vera Sans,arial,sans-serif;padding:4px;"><b>Black Hat Poland - SiL3Si4 Und3rGr0unD</a></b></div>
</div>
	</body>
</html>
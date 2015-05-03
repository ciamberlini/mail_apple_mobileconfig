<?php
  $data = file_get_contents("php://input");
  list($var, $account) = split('=', strtolower($data));
  header("Content-Type: application/xml");
  $mail = str_replace('%40', '@', $account);
  list($account, $domain) = split('@', $mail);
?>
<?php echo '<?xml version="1.0" encoding="utf-8" ?>'; ?>
<!DOCTYPE plist PUBLIC "-//Apple/DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
 
<plist version="1.0">
<dict>
 <key>PayloadContent</key>
  <array>
   <dict>
    <key>PayloadDisplayName</key>
    <string>Email Settings</string>
    <key>PayloadType</key>
    <string>com.apple.mail.managed</string>
    <key>PayloadVersion</key>
    <integer>1</integer>
    <key>PayloadUUID</key>
    <string>362e5c11-a332-4dfb-b18b-f6f0aac032fd</string>
    <key>PayloadIdentifier</key>
    <string>com.example.iPhone.settings.email</string>
    <key>EmailAccountDescription</key>
    <string>E-mail dominio</string>
    <key>EmailAccountName</key>
    <string><?php echo $mail; ?></string>
    <key>EmailAccountType</key>
    <string>EmailTypePOP</string>
    <key>EmailAddress</key>
    <string><?php echo $mail; ?></string>
    <key>IncomingMailServerAuthentication</key>
    <string>EmailAuthPassword</string>
    <key>IncomingMailServerHostName</key>
    <string><?php echo 'pop.'.$domain; ?></string>
    <key>IncomingMailServerUseSSL</key>
    <false />
    <key>IncomingMailServerPortNumber</key>
    <integer>110</integer>
    <key>IncomingMailServerUsername</key>
    <string><?php echo $mail; ?></string>
    <key>OutgoingPasswordSameAsIncomingPassword</key>
    <true />
    <key>OutgoingMailServerAuthentication</key>
    <string>EmailAuthPassword</string>
    <key>OutgoingMailServerHostName</key>
    <string><?php echo 'mail.'.$domain; ?></string>
    <key>OutgoingMailServerPortNumber</key>
    <integer>587</integer>
    <key>OutgoingMailServerUseSSL</key>
    <false />
    <key>OutgoingMailServerUsername</key>
    <string><?php echo $mail; ?></string>
   </dict>
  </array>
 
  <key>PayloadOrganization</key>
  <string>dominio srl</string>
  <key>PayloadDisplayName</key>
  <string>dominio Settings</string>
  <key>PayloadVersion</key>
  <integer>1</integer>
  <key>PayloadUUID</key>
  <string>954e6e8b-5489-484c-9b1d-0c9b7bf18e32</string>
  <key>PayloadIdentifier</key>
  <string>com.example.iPhone.settings</string>
  <key>PayloadDescription</key>
  <string>Sets up Organization email on the iOS</string>
  <key>PayloadType</key>
  <string>Configuration</string>
 </dict>
</plist>
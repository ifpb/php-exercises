<pre>
<?php
$dhcpdLeases = `dhcp-lease-list`;
echo $dhcpdLeases;
<pre>
<?php

$dhcpdPools = `dhcpd-pools -l /var/lib/dhcp/dhcpd.leases -c /etc/dhcp/dhcpd.conf -f J`;
echo $dhcpdPools;

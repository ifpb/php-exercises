<?php
$result = '[
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 16:38:55",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 16:43:56",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 16:48:55",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 16:53:55",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 16:58:54",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 17:03:54",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 17:08:54",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 17:13:53",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 17:18:53",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 17:23:53",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 17:28:53",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 17:33:52",
    "manufacturer": ""
  },
  {
    "mac": "08:00:27:81:9c:76",
    "ip": "192.168.1.10",
    "hostname": "dhcpclient1",
    "valid": "2019-02-14 17:38:51",
    "manufacturer": ""
  }
]';

header("Content-type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
echo $result;
# Commands

```
$ ls /sys/class/net/
eth0  lo

$ cat /sys/class/net/eth0/statistics/rx_bytes
85061

$ cat /sys/class/net/eth0/statistics/tx_bytes
74576

$ netstat -i
Kernel Interface table
Iface   MTU Met   RX-OK RX-ERR RX-DRP RX-OVR    TX-OK TX-ERR TX-DRP TX-OVR Flg
eth0       1500 0      1027      0      0 0           652      0      0      0 BMRU
lo        65536 0        24      0      0 0            24      0      0      0 LRU

$ ip -s link
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN mode DEFAULT group default
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    RX: bytes  packets  errors  dropped overrun mcast
    2370       24       0       0       0       0
    TX: bytes  packets  errors  dropped carrier collsns
    2370       24       0       0       0       0
2: eth0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc pfifo_fast state UP mode DEFAULT group default qlen 1000
    link/ether 08:00:27:62:8e:9b brd ff:ff:ff:ff:ff:ff
    RX: bytes  packets  errors  dropped overrun mcast
    76273      856      0       0       0       0
    TX: bytes  packets  errors  dropped carrier collsns
    66026      547      0       0       0       0
```
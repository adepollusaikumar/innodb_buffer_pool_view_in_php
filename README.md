# innodb buffer pool view in php

Pre-requisites :

`Oracle virtualbox : 5.2.22`
`Vagrant :  2.2.3`

Download git lab :

`git clone https://github.com/adepollusaikumar/innodb_buffer_pool_view_in_php.git

cd innodb_buffer_pool_view_in_php
vagrant up`

if any SSH errors in between just run `vagrant destroy` the and re execute `vagrant up`  

Once successfull execution open the link : http://10.0.5.100/innodb/index.html

Here PHP page fetches data from mysql information_schema tables.

![](Dashboard.gif)

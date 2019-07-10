# innodb buffer pool view in php

Pre-requisites :<br>
`Oracle virtualbox : 5.2.22` <br>
`Vagrant :  2.2.3` <br>

Download git lab :

`git clone https://github.com/adepollusaikumar/innodb_buffer_pool_view_in_php.git`<br>

`cd innodb_buffer_pool_view_in_php`<br>
`vagrant up`<br>

if any SSH errors in between just run `vagrant destroy`  and then re-execute `vagrant up`  

Once successfull execution open the link : http://10.0.5.100/innodb/index.html

Here PHP page fetches data from mysql information_schema tables.

![](Dashboard.gif)

<?php 

require "../vendor/autoload.php";

(new Person())->read(new Book());
(new Person())->read(new Adapter(new Kindle()));
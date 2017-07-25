<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'AlphaNine';
?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="/webroot/font-awesome-4.7.0/css/font-awesome.css">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <!-- <?= $this->Html->css('cake.css') ?> -->  <!-- desativei pq o stylesheet estava me incomodando, se ferrar em algo � s� ativar -->
    <?= $this->Html->css('alpha.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102245492-2', 'auto');
  ga('send', 'pageview');

</script>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <div class="alpha-logo"></div>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                 <li><a target="_blank" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a target="_blank" href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a target="_blank" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
  
</body>
</html>

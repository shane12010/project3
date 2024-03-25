<<<<<<< HEAD
b<?php $title = 'tweets' ?>
<?php require 'components/header.php' ?>
<?php require 'components/conn ?>

$pak_alle_tweet = $conn->prepare(query:"SELECT * FROM tweets");
$pak_alle_tweets->execute();
$tweets = $pak_alle_tweets->fetchALL();

foreach ($tweets as $tweet){
 echo $tweet['content'] . </br>

>?
=======
b<?php $title = 'tweets' ?>
<?php require 'components/header.php' ?>
<?php require 'components/conn' ?>

$pak_alle_tweet = $conn->prepare(query:"SELECT * FROM tweets");
$pak_alle_tweets->execute();
$tweets = $pak_alle_tweets->fetchALL();

foreach ($tweets as $tweet){
 echo $tweet['content'] . </br>

>?
>>>>>>> e5f6f59cb6ecca7ed325348b5b518c7f46a246ab

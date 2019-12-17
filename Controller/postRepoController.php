<?php

include_once "../Model/PostRepository.php";

$postRepository = new PostRepository();
$listOfPosts = $postRepository->getListOfPosts($this->pageNumber);

$galGen = new GalleryGenerator($listOfPosts);

$srcArr = $galGen->getImgSrc();    // get array of previews hyperlinks
$phArr = $galGen->getPostHrefs();  // get array of posts hyperlinks

$galGen->generateGallery();         // start rendering
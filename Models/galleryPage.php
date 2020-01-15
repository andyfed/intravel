<?php


namespace Models;
use DB\DB;
use Models\PostRepository;

class galleryPage
{
    public $picsOnPage;
    public $pageNumber;

    // by default now is 18 pics on page
    public function __construct($pageNumber, $numberOfPics = 18)
    {
        $this->pageNumber = $pageNumber;
        $this->picsOnPage = $numberOfPics;
    }

    private function getPostIdList(): array
    {
        $init = ($this->pageNumber-1)*$this->picsOnPage;
        //$lim = $init.','.$this->picsOnPage;
        $query = 'SELECT post_id FROM Posts ORDER BY post_id DESC LIMIT '.$init.','.$this->picsOnPage.';';
        return DB::run($query)->fetchAll();
    }

    // give array of objects Post
    public function getPage(): array
    {
        $postIdList = $this->getPostIdList();
        $postRepository = new PostRepository();
        $postsArray=  $postRepository->getByIds($postIdList);
        foreach ($postsArray as $post)
            $post->picLinkMin = picHandler::getMin($post->pic_link);

        return $postsArray;
    }
}